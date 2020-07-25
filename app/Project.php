<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Carbon\Carbon;


class Project extends Model
{

    use RecordsActivity;


    protected $guarded = [];


    public function path()
    {
        return "/projects/$this->id";
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function statuses() {
        return $this->hasMany(Status::class);
    }

    public function done_on_days($date) {
        return $this->statuses()->where('submitted_at','=', $date);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($body)
    {
        return $this->tasks()->create(compact('body'));
    }


    public function addTasks($tasks)
    {
        return $this->tasks()->createMany($tasks);
    }

    public function activity()
    {
        return $this->hasMany(Activity::class)->latest();
    }

    public function invite(User $user)
    {
        return $this->members()->attach($user);
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'project_members')->withTimestamps();
    }




    protected $casts = [
        'completed' => 'boolean'
    ];

    // protected static $recordableEvents = ['created'];


    public function complete()
    {
        // $this->update(['completed' => true]);
        $status = Status::create(['user_id' => Auth::user()->id, 'project_id' => $this->id, 'submitted_at' => Carbon::now()->toDateString(), 'completed' => 1]);

        // $this->recordActivity('completed_task');
    }

    public function incomplete()
    {
        $status = Status::where('user_id', Auth::user()->id)->where('project_id', $this->id)->where('submitted_at', Carbon::now()->toDateString())->delete();

        // $this->update(['completed' => false]);
        // $this->recordActivity('incompleted_task');
    }
}
