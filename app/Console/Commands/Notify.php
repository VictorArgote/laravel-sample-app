<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zoadilack:notify {email?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email to whatever 
        email address is specified, otherwise it should
        use a default email specified in the 
        environment configuration';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $emailTo = $this->argument('email');

        if (!env('DEFAULT_EMAIL')) {
            $this->error('Email not defined! DEFAULT_EMAIL not found in Environment.');
            return;
        } elseif (!$emailTo) {
            $this->error('Email not defined! Using default value');
            $emailTo = env('DEFAULT_EMAIL');
        }

        // Send email containing multiple database configuration settings
        Mail::send(
            'emails.dbconfig',
            ['environment' => App::environment()],
            function($message) use ($emailTo) {
                $message->to($emailTo)
                    ->subject('Notify: Multiple database configuration settings.');
            });
    }
}
