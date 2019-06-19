<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'customerNumber',
        'customerName',
        'customerLastName',
        'customerFirstName',
        'phone',
        'addressLine1',
        'addressLine2',
        'city',
        'state',
        'postCode',
        'country',
        'saleRepEmployeeNumber',
        'creditLimit'
    ];
}
