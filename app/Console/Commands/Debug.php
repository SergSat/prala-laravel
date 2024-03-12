<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class Debug extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'debug';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for debug';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::where('email', 'djigorsan@gmail.com')->first();
        print_r($user->email);
        print_r(PHP_EOL);
    }
}
