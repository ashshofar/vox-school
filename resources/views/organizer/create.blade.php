@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Create</div>
        <div class="panel-body">
            {!! Form::open([
                'route' 	=> 'organizer.store', 
                'method' 	=> 'POST', 
                'class'		=> 'form-horizontal'
            ]) !!}
            
                @include('organizer.form')

            {!! 
                Form::close();    
            !!}
        </div>
    </div>
@endsection