<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'orderNumber',
        'productCode',
        'quantityOrdered',
        'priceEach',
        'orderLineNumber'
    ];
}
