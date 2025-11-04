<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'user_id',
        'product_id',
        'event_id'
    ];
}
