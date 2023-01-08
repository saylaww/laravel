<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = [
        "name",
        "model",
        "active"
    ];

    public function contracts(){
        return $this->hasMany(Product::class);
    }

}
