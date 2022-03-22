<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetOvertimeRequest;
use App\Http\Requests\StoreOvertimeRequest;
use App\Repositories\Overtime\OvertimeInterface;

class OvertimeController extends Controller
{
    public function __construct(OvertimeInterface $overtimeRepository)
    {
        $this->overtimeRepository = $overtimeRepository;
    }
    public function index(GetOvertimeRequest $request)
    {
        return $this->overtimeRepository->getOvertimes($request);
    }

    public function store(StoreOvertimeRequest $request)
    {
        return $this->overtimeRepository->storeOvertime($request);
    }
}
