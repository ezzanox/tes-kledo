<?php

namespace App\Repositories\Overtime;

use Illuminate\Support\ServiceProvider;

class OvertimeRepoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Overtime\OvertimeInterface',
            'App\Repositories\Overtime\OvertimeRepository'
        );
    }
}
