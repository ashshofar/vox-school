@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Student</div>
        <div class="panel-body">
            {!! Form::open([
                'route' 	=> ['student.update', $student->id], 
                'method' 	=> 'POST', 
                'class'		=> 'form-horizontal'
            ]) !!}
            
                @include('student.form', ['edit' => true])

            {!! 
                Form::close();    
            !!}
        </div>
    </div>
@endsection