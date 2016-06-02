<?php

namespace App\Models\Components;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable = [
     		'jobtitle',
			'company',
			'city',
			'state',
			'country',
			'formattedLocation',
			'source',
			'date',
			'snippet',
			'url',
			'onmousedown',
			'latitude',
			'longitude',
			'jobkey',
			'sponsored',
			'expired',
			'indeedApply',
			'formattedLocationFull',
			'formattedRelativeTime',
			'source_api',
			'company_logo',
			'company_url',
			'how_to_apply',
			'type',
    ];
    
}
