<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debet extends Model
{
    //

    protected $fillable = [
        "month_name",
        "summa",
        "contract_id",
        "enabled"
    ];

    public function contract(){
        return $this->belongsTo(Contract::class);
    }

}
