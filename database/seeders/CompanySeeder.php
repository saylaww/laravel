<?php

use Illuminate\Database\Seeder;
//use Company;

class CompanySeeder extends Seeder
{

    public function run()
    {
        \App\Models\Company::create([
           "name"=>"Nukuslab",
        ]);
    }





}
