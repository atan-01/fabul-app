<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UserService::class, function ($app){
            $users = [
                [
                    'name' => 'nathaniel fabul',
                    'gender' => 'male'
                ],
                [
                    'name' => 'shantelle sotelo',
                    'gender' => 'female'
                ]
                ];

                return new UserService($users);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
