<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'employeeNumber',
        'lastname',
        'firstName',
        'extention',
        'email',
        'officeCode',
        'reportTo',
        'jobTitle'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'reportTo');
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'saleRepEmployeeNumber');
    }
}
