<?php

namespace App\Repositories\Overtime;

use App\Http\Resources\OvertimeResource;
use App\Models\Overtime;
use App\Repositories\Overtime\OvertimeInterface;


class OvertimeRepository implements OvertimeInterface
{
    public function getOvertimes($request)
    {
        $overtimes = Overtime::with('employee')
            ->where('date', '>=', $request->date_started)
            ->where('date', '<=', $request->date_ended)
            ->get();

        return response()->json(OvertimeResource::collection($overtimes), 200);
    }

    public function storeOvertime($request)
    {
        $overtime = Overtime::where('date', $request->date)
            ->where('employee_id', $request->employee_id)
            ->first();

        if (!$overtime) {
            Overtime::create([
                'employee_id' => $request->employee_id,
                'date' => $request->date,
                'time_started' => $request->time_started,
                'time_ended' => $request->time_ended,
            ]);

            return response()->json([
                'message' => 'Overtime created succesfully!'
            ], 201);
        }

        return response()->json([
            'message' => 'The selected employee id and date already exist'
        ], 409);
    }
}
