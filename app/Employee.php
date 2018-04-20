<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The projects that the employee belongs to.
     */
    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }
}
