<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'productLine',
        'textDescription',
        'htmlDescription',
        'images',
    ];
}
