<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    protected $table = 'productlines';
    
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

    public function products()
    {
        return $this->hasMany(Product::class, 'productLine');
    }
}
