<?php

namespace App\Console\Commands;

use App\Http\Stub;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Log;

class MakeTraitCommand extends Command
{

    protected $signature = 'make:trait {name}';

    protected $description = 'Haqqinda';

//    public $fileSystem = '';

    public $files;

    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    public function handle()
    {
        $namespace = 'App\\Traits';

        $full_path = base_path($namespace) . '\\' . $this->argument('name').'Trait.php';

        //php artisan make:trait TEST

//        Log::alert($this->argument('name'));

        $message = Stub::of($this->files,'trait.stub',$this->argument('name'),$namespace,$full_path);

        $this->info($message);

        return Command::SUCCESS;
    }

//    public function handle()
//    {
//        return Command::SUCCESS;
//    }



}
