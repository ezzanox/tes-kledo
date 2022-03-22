<?php

namespace App\Repositories\Employee;

use Illuminate\Support\ServiceProvider;

class EmployeeRepoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Employee\EmployeeInterface',
            'App\Repositories\Employee\EmployeeRepository'
        );
    }
}
