<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

use App\Models\School;
use App\Models\Student;

use Carbon\Carbon;


class StudentController extends Controller
{
    public function create()
    {
        $schools = School::all();

        return view('student.create', compact('schools'));
    }

    public function store(StudentRequest $request)
    {
        $school = School::where('id', $request->school_id)
                        ->withCount('students')
                        ->first();

        if(empty($school)){
            return redirect()->back();
        }

        if($school->max_student < $school->students_count + 1){
            \Session::flash('message', 'Max Student Reached'); 
            return redirect()->route('school.show', ['id' => $request->school_id]);
        }

        $student = new Student();
        $student->first_name     = $request->first_name;
        $student->last_name      = $request->last_name;
        $student->full_name      = $request->first_name ." ".$request->last_name;
        $student->birthdate      = Carbon::parse($request->birthdate);
        $student->school_id      = $request->school_id;
        $student->picture        = $request->picture;
        $student->save();

        return redirect()->route('school.show', ['id' => $request->school_id]);
    }

    public function edit($id)
    {
        $student = Student::where('id', $id)
                            ->with('school')
                            ->first();

        $schools = School::all();

        if(empty($student)){
            return redirect()->back();
        }

        return view('student.edit', compact('student', 'schools'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        if(empty($student)){
            return redirect()->back();
        }

        $student->first_name     = $request->first_name;
        $student->last_name      = $request->last_name;
        $student->full_name      = $request->first_name ." ".$request->last_name;
        $student->birthdate      = Carbon::parse($request->birthdate);
        $student->school_id      = $request->school_id;
        $student->picture        = $request->picture;
        $student->update();

        return redirect()->route('school.show', ['id' => $request->school_id]);
    }

    public function delete($id)
    {
        $student = Student::destroy($id);

        return redirect()->route('school.index');
    }

    public function getStudentApi($id)
    {
        $student = Student::with('school')->find($id);

        return response()->json($student);
    }


}

