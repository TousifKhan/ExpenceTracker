<?php

namespace App\Models;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name', 'make', 'make_year',
    ];

    protected $guarded = [];
}
