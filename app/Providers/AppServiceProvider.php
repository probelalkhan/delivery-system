<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->register();

        \Gate::define('admin', function($user){
            return $user->role == 'admin';
        });

        \Gate::define('client', function($user){
            return $user->role == 'client';
        });

    }
}
