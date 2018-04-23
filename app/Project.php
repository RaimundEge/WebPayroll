<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
     /**
     * The employees that the belong to this  project.
     */
    public function employees()
    {
        return $this->belongsToMany('App\Employee');
    }
    protected $table = 'wp_projects';    
}
