<?php

namespace App;

trait RecordsActivity
{

    public $old = [];

    public static function bootRecordsActivity()
    {
        static::updating(function ($model) {
            $model->old = $model->getOriginal();
        });
    }

    public function recordActivity($description)
    {
        $this->activity()->create([
            'project_id' => class_basename($this) === 'Project' ?  $this->id : $this->project->id,
            'description' => $description,
            'changes' => $this->activityChanges()
        ]);
    }


    public function activity()
    {
        return $this->morphMany(Activity::class, 'subject')->latest();
    }

    protected function activityChanges()
    {
        if ($this->wasChanged()) {
            return [
                'before' => array_except(array_diff($this->old, $this->getAttributes()), 'updated_at'),
                'after' => array_except($this->getChanges(), 'updated_at')
            ];
        }
    }
}
