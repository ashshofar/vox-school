@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Create Student</div>
        <div class="panel-body">
            {!! Form::open([
                'route' 	=> 'student.store', 
                'method' 	=> 'POST', 
                'class'		=> 'form-horizontal'
            ]) !!}
            
                @include('student.form', ['edit' => false])

            {!! 
                Form::close();    
            !!}
        </div>
    </div>
@endsection