<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Auth;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class ProjectsController extends Controller
{
    public function index()
    {

        $projects = auth()->user()->projects()->orderBy('updated_at', 'desc')->get();
        return view('projects.index', compact('projects'));
    }
    public function darkIndex($date = '')
    {

        if($date) {
            $now = request()->date;
        } else {
            $now = Carbon::now()->toDateString();
        }

        $projects = Project::where('owner_id', Auth::user()->id)->with(['statuses' => function($query) {
            $query->where('statuses.user_id', Auth::user()->id); 
        }])->get();

        $done_tasks = array();

        foreach($projects as $project) {
            foreach($project->statuses()->get() as $submitted) {
                
                if($now == $submitted['submitted_at']) {
                    $project->completed = 1;
                    $project->completed_on = $now;
                    $project->submitted_at = $submitted['updated_at'];
                    $done_tasks[] =  $submitted['submitted_at'];

                } else {
                    $project->completed = 0;
                }
                
            }
            
        }

        // $done_tasks = $projects->where('completed', 1);
        $daily_percent = round(@(count($done_tasks) / $projects->count()) * 100);

        $firstDay = Carbon::parse($now)->startOfMonth()->toDateString();
        $lastDay = Carbon::parse($now)->endOfMonth()->toDateString();

        $period = CarbonPeriod::create($firstDay, $lastDay);

        

        // dd($monthly_percent);
        // dd($monthly_report);

        // dd($done_tasks);

        // var_dump($period);
        return view('dashboard-dark', compact('projects', 'daily_percent', 'period', 'now'));
    }
    public function create()
    {
        return view('projects.create');
    }

    public function show(Project $project)
    {
        $this->authorize('update', $project);
        return view('projects.show', compact('project'));
    }

    public function store()
    {
        $project = auth()->user()->projects()->create($this->validateRequest());

        // if ($tasks = request('tasks')) {
        //     $project->addTasks($tasks);
        // }

        if (request()->wantsJson()) {
            return ['message' => '/dashboard'];
            // return ['message' => $project->path()];
        }
        // dd($project);
        return redirect('dashboard');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        
        $project->update($this->validateRequest());
        // return $this->validateRequest();
        request('completed') ? $project->complete() : $project->incomplete();
        return redirect('/dashboard');
        // $this->authorize('update', $project);
        // $project->update($this->validateRequest());
        // return redirect($project->path());
    }

    public function complete(Project $project)
    {
        request('completed') ? $project->complete() : $project->incomplete();

        return redirect($project->path());
    }

    public function destroy(Project $project)
    {
        // $this->authorize('manage', $project);
        $project->delete();
        return redirect('/dashboard');
    }

    protected function validateRequest()
    {
        return request()->validate([
            'title' => 'sometimes|required',
            'description' => 'sometimes',
            'critical' => 'sometimes',
            'color' => 'nullable',
            'notes' => 'nullable'
        ]);
    }
}
