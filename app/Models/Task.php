<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'code','project_id'];

    public function project() {
        return $this->belongsTo(Project::class);
    }
}
