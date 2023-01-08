<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //

    protected $fillable = [
        "full_name",
        "username",
        "password",
        "role_id",
        "balance",
        "phone"
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function contracts(){
        return $this->hasMany(Contract::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }


}
