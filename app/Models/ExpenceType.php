<?php

namespace App\Models;

use App\Models\BaseModel;

class ExpenceType extends BaseModel
{
    //
    protected $fillable = [
        'name', 'description'
    ];

    public function parent() {
        return $this->belongsTo(ExpenceType::class, 'parent_id');
    }

}
