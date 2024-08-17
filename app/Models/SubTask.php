<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTask extends Model
{
    use HasFactory;

    protected $fillable = ['task_group_id', 'task_name', 'task_description', 'task_due', 'task_done', 'task_file', 'file_links'] ;

    public function fileManagers()
    {
        return $this->hasMany(FileManager::class, 'SubTask_id');
    }

    public function taskGroup()
    {
        return $this->belongsTo(TaskGroup::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
