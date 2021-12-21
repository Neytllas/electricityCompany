<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Client;
use Illuminate\Support\Facades\View;


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
        $client = Client::query()->where("login", "111111")->first();
        View::share('client', $client);
    }
}
