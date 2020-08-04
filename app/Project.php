<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $collection = 'projects';

    protected $guarded = [];	


    public function getRouteKeyName()
    {
    	return 'url';
    }
}
