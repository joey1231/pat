<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

class Indeed extends Model
{
    protected $fillable= [
    		'id',
			'q',
			'l',
			'sort',
			'radius',
			'st',
			'jt',
			'start',
			'limit',
			'fromage',
			'filter',
			'latlong',
			'co',
			'chnl',
			'userip',
			'useragent',

    ];
}
