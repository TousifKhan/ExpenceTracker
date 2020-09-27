<?php

namespace App\Models;

use App\Models\User;
use App\Models\BaseModel;

class Unit extends BaseModel
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
