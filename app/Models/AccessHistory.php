<?php

namespace App\Models;

//use App\Models\BaseModel;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;

class AccessHistory extends Model
{
    protected $table = 'access_history';
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'last_login_at', 'last_login_ip'
    ];

    //Since we are not extending BaseModel
    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}
