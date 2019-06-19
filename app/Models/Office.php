<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'officeCode',
        'city',
        'phone',
        'addressLine1',
        'addressLine2',
        'state',
        'country',
        'postCode',
        'temitory'
    ];
}
