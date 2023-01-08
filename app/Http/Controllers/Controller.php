<?php

namespace App\Http\Controllers;

use App\Events\Antenna;
use App\Jobs\BirinshiJumis;
use App\Listeners\Qabillawshi;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        BirinshiJumis::dispatch();

        Antenna::dispatch();

    

        return "INDEX";
    }

}
