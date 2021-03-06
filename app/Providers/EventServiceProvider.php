<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\NewUser'=>[
            'App\Listener\SendWelcomeEmail',
//            'App\Listener\FirstTimeCreatePost',
//            'App\Listener\ActivityNotice',
//
        ],
        'App\Events\RegisteredUser'=>[
            'App\Listener\CommentsFromOtherUsers',
            'App\Listener\NewPostCreated',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
