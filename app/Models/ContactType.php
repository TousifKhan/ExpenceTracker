<?php

namespace App\Models;

use App\Models\BaseModel;

class ContactType extends BaseModel
{
    protected $fillable = [
        'name', 'description'
    ];

}
