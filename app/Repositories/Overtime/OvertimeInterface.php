<?php

namespace App\Repositories\Overtime;

interface OvertimeInterface
{
    public function getOvertimes($request);
    public function storeOvertime($request);
}
