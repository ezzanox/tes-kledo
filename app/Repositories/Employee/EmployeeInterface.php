<?php

namespace App\Repositories\Employee;

interface EmployeeInterface
{
    public function getEmployees($request);
    public function storeEmployee($request);
}
