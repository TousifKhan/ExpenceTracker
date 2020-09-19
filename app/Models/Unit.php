<?php

namespace App\Models;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Unit extends Model
{
    //use SoftDeletes;

    protected $fillable = [
        'name', 'address', 'contact', 'state', 'main_unit', 'role'
    ];

    protected $casts = [
        'main_unit' => 'boolean'
    ];

    public function users() {
        return $this->hasMany(User::class);
    }

}
