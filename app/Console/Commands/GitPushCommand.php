<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
//use Symfony\Component\Process;


class GitPushCommand extends Command
{

    protected $signature = 'git:push {message}';
    protected $description = 'Git push boldi';

    public function handle()
    {
        $message = $this->argument("message");
//        $proc = new Process\Process(['php artisan make:model',$message]);
//        $proc->run();
//        $p = Process\Process::fromShellCommandline($proc);
//        $p->run();
//new Process\Process()
//        $message = $this->argument("message");
//        $proc = new Process\Process(['php artisan make:model',$message]);
//
//        $proc->run();

/////
///
        (new Process(['git','add','.']))->run();
        (new Process(['git','commit','-m', $message]))->run();
        (new Process(['git','push']))->run();
//
        $this->info("Git jan`alandi");

//        return Command::SUCCESS;
    }


}
