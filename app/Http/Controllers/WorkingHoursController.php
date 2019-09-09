<?php

namespace App\Http\Controllers;

use App\Models\WorkingHours;
use Illuminate\Http\Request;

class WorkingHoursController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $days = $request->all();
        try {
            foreach ($days['data'] as $day) {
                $workingHours = WorkingHours::create($day);
            }
            return response()->json([
                'success' => 'Working hours is successfuly created',
                'working hours' => $workingHours
            ]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WorkingHours  $workingHours
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, WorkingHours $workingHours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkingHours  $workingHours
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkingHours $workingHours)
    {
        //
    }
}
