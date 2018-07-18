@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Edit School</div>
        <div class="panel-body">
            {!! Form::open([
                'route' 	=> ['school.update', $school->id], 
                'method' 	=> 'POST', 
                'class'		=> 'form-horizontal'
            ]) !!}
            
                @include('school.form', ['edit' => true])

            {!! 
                Form::close();    
            !!}
        </div>
    </div>
@endsection