<?php

namespace App\Providers;

use App\Services\Sms\SmsGlobalSender;
use App\Services\Sms\SmsSender;
use App\Services\Sms\VoodooSmsSender;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(SmsSender::class, VoodooSmsSender::class);
        $this->app->bind(SmsSender::class, SmsGlobalSender::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
