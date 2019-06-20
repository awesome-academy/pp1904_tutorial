<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'orderNumber',
        'orderDate',
        'requiredDate',
        'shippedDate',
        'status',
        'comment',
        'customerNumber'
    ];

    public function orderdetails()
    {
        return $this->hasMany(Order::class, 'orderNumber');
    }
}
