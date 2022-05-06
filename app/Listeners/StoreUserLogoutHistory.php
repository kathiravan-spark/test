<?php

namespace App\Listeners;

use App\Events\LogoutHistory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class StoreUserLogoutHistory
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\LogoutHistory  $event
     * @return void
     */
    public function handle(LogoutHistory $user)
    {
        $current_timestamp = Carbon::now()->toDateTimeString();
        $userinfo = $user->user;
 dd($userinfo);
        $saveHistory = DB::table('logout_history')->insert(
        [
          'name' => $userinfo->name,
          'email' => $userinfo->email,
          'status'=>1 ,
          'logout_time'=>$current_timestamp,
          'created_at' => $current_timestamp, 
          'updated_at' => $current_timestamp
        ]);

        DB::table('login_history')->where('name',$userinfo->name)->update(['status'=>0]);
        return $saveHistory;
    }
}
