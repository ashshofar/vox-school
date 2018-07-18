<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrganizerRequest;

use Validator;

class OrganizerController extends Controller
{
    public function index()
    {
        return view('organizer.index');
    }

    public function create()
    {
        return view('organizer.create');
    }

    public function store(OrganizerRequest $request)
    {
        // $input = $request->all();

        // $validator = Validator::make($input, OrganizerRequest::rules('CREATE'));

        // if ($validator->fails()){
        //     return redirect()->back()->with('errors');
        // }

        return 'suceess';
    }
}
