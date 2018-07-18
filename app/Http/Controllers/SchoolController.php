<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SchoolRequest;

use App\Models\School;


class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();

        $schools = School::withCount('students')
                        ->get();

        return view ('school.index', compact('schools'));
    }

    public function create()
    {
        return view('school.create');
    }

    public function store(SchoolRequest $request)
    {
        $school = new School();
        $school->name           = $request->name;
        $school->address        = $request->address;
        $school->max_student    = $request->max_student;
        $school->annual_fee     = $request->annual_fee;
        $school->save();

        return redirect()->route('school.index');
    }

    public function edit($id)
    {
        $school = School::find($id);

        if(empty($school)){
            return redirect()->back();
        }

        return view('school.edit', compact('school'));
    }

    public function update(Request $request, $id)
    {
        $school = School::find($id);

        if(empty($school)){
            return redirect()->back();
        }

        $school->name           = $request->name;
        $school->address        = $request->address;
        $school->max_student    = $request->max_student;
        $school->annual_fee     = $request->annual_fee;
        $school->update();

        return redirect()->route('school.index');
    }

    public function show($id)
    {
        $school = School::where('id', $id)
                        ->with('students')
                        ->first();

        if(empty($school)){
            return redirect()->back();
        }

        return view('school.show', compact('school'));
    }

    public function delete($id)
    {
        $school = School::destroy($id);

        return redirect()->route('school.index');
    }
}
