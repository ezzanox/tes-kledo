<?php

namespace App\Repositories\Setting;

use Illuminate\Support\ServiceProvider;

class SettingRepoServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->bind(
            'App\Repositories\Setting\SettingInterface',
            'App\Repositories\Setting\SettingRepository'
        );
    }
}
