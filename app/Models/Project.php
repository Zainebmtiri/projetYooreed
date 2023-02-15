<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Relations\HasMany; 

use App\Models\Task;


class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'content'];

    public function tasks() {
        return $this->hasMany(Task::class);
    }
}

