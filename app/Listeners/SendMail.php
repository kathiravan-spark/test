<?php

namespace App\Listeners;

use App\Events\UpdateUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendMailJob;
use Illuminate\Support\Facades\Redis;

class SendMail
{
    public $user;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        // 
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UpdateUser  $event
     * @return void
     */
    public function handle(UpdateUser $user)
    {
        $jobs = new SendMailJob($user);
         dispatch($jobs);
         return redirect();
        
    }
}
