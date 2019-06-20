<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    
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

    public function payments()
    {
        return $this->hasMany(Customer::class, 'customerNumber');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'customerNumber');
    }
}
