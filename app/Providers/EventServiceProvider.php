<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\LoginHistory;
use App\Listeners\StoreUserLoginHistory;
use App\Events\LogoutHistory;
use App\Listeners\StoreUserLogoutHistory;
use App\Events\UpdateUser;
use App\Listeners\SendMail;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        LoginHistory::class => [
            StoreUserLoginHistory::class,
        ],
        LogoutHistory::class => [
            StoreUserLogoutHistory::class,
        ],
        UpdateUser::class => [
            SendMail::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
    //     Event::listen(
    //         LoginHistory::class,
    //         [StoreUserLoginHistory::class, 'handle']
    //     );
     
    //     Event::listen(function (LoginHistory $event) {
    //         //
    //     });
    //     Event::listen(
    //         LogoutHistory::class,
    //         [StoreUserLogoutHistory::class, 'handle']
    //     );
     
    //     Event::listen(function (LogoutHistory $event) {
    //         //
    //     });
    //     Event::listen(
    //         UpdateUser::class,
    //         [ EditUser::class, 'handle']
    //     );
     
    //     Event::listen(function (UpdateUser $event) {
    //         //
    //     });
    }
}
