<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskGroup extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subTasks()
    {
        return $this->hasMany(SubTask::class);
    }
}
