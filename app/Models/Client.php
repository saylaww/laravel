<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
        "full_name",
        "phone"
    ];

    public function contracts(){
        return $this->hasMany(Contract::class);
    }

}
