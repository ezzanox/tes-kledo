<?php

namespace App\Repositories\Employee;

use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use App\Repositories\Employee\EmployeeInterface;


class EmployeeRepository implements EmployeeInterface
{
    public function getEmployees($request)
    {
        $employees = Employee::with('reference');
        if ($request->order_by == 'name' || $request->order_by == 'salary') {
            if ($request->order_type == 'asc' || $request->order_type == 'desc') {
                $employees->orderBy($request->order_by, $request->order_type);
            }
            $employees->orderBy($request->order_by, 'asc');
        }
        $employees->paginate($request->per_page ? $request->per_page : 10);
        return response()->json(EmployeeResource::collection($employees->get()), 200);
    }

    public function storeEmployee($request)
    {
        Employee::create($request->all());
        return response()->json([
            'message' => 'Overtime created succesfully!'
        ], 201);
    }
}
