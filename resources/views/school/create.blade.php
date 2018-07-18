@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Create School</div>
        <div class="panel-body">
            {!! Form::open([
                'route' 	=> 'school.store', 
                'method' 	=> 'POST', 
                'class'		=> 'form-horizontal'
            ]) !!}
            
                @include('school.form', ['edit' => false])

            {!! 
                Form::close();    
            !!}
        </div>
    </div>
@endsection