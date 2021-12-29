<?php

namespace Sovannrach\Notification;

use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        // $this->loadViewsFrom(__DIR__ . '/views', 'email');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/app.php', 'notification');
    }
}
