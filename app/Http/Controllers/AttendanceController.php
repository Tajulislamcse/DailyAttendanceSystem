<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::select(" select * from students s left join attendances a on s.id = a.student_id");
        //dd($students);
        return view('student_list',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      // dd($request->all());

        for($i=0;$i<count($request->student_id);$i++)
        {

            $student = DB::table('attendances')->where('student_id', $request->student_id[$i])->first();
           if(isset($student->student_id))
           {
             $check_attendance = isset($request->is_present) ? in_array($student->student_id,$request->is_present) : null;

              if($check_attendance)
              {
                 DB::table('attendances')->where('student_id', $student->student_id)->update(['attendances_date'=>date('Y-m-d'),'is_present'=>1]);

              }
              else
              {
                 DB::table('attendances')->where('student_id', $student->student_id)->update(['attendances_date'=>date('Y-m-d'),'is_present'=>0]);

              }
          }
              else
              {
                $data = [];
               $data = [
                'student_id'=>$request->student_id[$i],
                'student_name'=>$request->student_name[$i],
                'attendances_date'=>date('Y-m-d'),
                'is_present' => isset($request->is_present) ? (in_array($request->student_id[$i],$request->is_present) ? 1 : 0 )  : 0
            ];
            DB::table('attendances')->insert($data); 
              }
           } 
         return redirect('attendance');
        }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
