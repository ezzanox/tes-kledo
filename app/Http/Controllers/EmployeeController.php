<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetEmployeeRequest;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use App\Repositories\Employee\EmployeeInterface;
use App\Services\GetEmployeeService;

class EmployeeController extends Controller
{

    public function __construct(EmployeeInterface $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function index(GetEmployeeService $getEmployeeService, GetEmployeeRequest $request)
    {
        return $this->employeeRepository->getEmployees($request);
    }

    public function store(StoreEmployeeRequest $request)
    {
        return $this->employeeRepository->storeEmployee($request);
    }
}
