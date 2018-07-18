<div class="row">
    <div class="col-md-12">
        <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">

            {!! Form::label('first_name', 'First Name', ['class'=>'control-label col-sm-2 col-sm-2']) !!}
            <div class="col-sm-10">
                {!! Form::text('first_name', $edit ? $student->first_name : null, ['class'=>'form-control', 'placeholder'=>'Input first name']) !!}
                {!! $errors->has('first_name') ? $errors->first('first_name', '<p class="help-block">:message</p>') : ""!!}
            </div>
        
        </div>

        <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">

            {!! Form::label('last_name', 'Last Name', ['class'=>'control-label col-sm-2 col-sm-2']) !!}
            <div class="col-sm-10">
                {!! Form::text('last_name', $edit ? $student->last_name : null, ['class'=>'form-control', 'placeholder'=>'Input last name']) !!}
                {!! $errors->has('last_name') ? $errors->first('last_name', '<p class="help-block">:message</p>') : ""!!}
            </div>
            
        </div>

        <div class="form-group {{ $errors->has('birthdate') ? ' has-error' : '' }}">

            {!! Form::label('birthdate', 'Birthdate', ['class'=>'control-label col-sm-2 col-sm-2']) !!}
            <div class="col-sm-10">
                {!! Form::text('birthdate', $edit ? $student->birthdate : null, ['class'=>'form-control', 'placeholder'=>'Input birthdate', 'id' => 'birthdate']) !!}
                {!! $errors->has('birthdate') ? $errors->first('birthdate', '<p class="help-block">:message</p>') : ""!!}
            </div>
            
        </div>

        <div class="form-group {{ $errors->has('school_id') ? ' has-error' : '' }}">

            {!! Form::label('school_id', 'School', ['class'=>'control-label col-sm-2 col-sm-2']) !!}
            <div class="col-sm-10">
                <select name="school_id" class="form-control">
                    @if($edit)
                        <option value="{{ $student->school_id }}" selected>{{ $student->school->name }}</option>
                    @endif
                    
                    @foreach($schools as $school)
                        <option value="{{ $school->id }}">{{ $school->name }}</option>
                    @endforeach
                </select>
            </div>
            
        </div>

        <div class="form-group {{ $errors->has('picutre') ? ' has-error' : '' }}">

            {!! Form::label('picture', 'Picture', ['class'=>'control-label col-sm-2 col-sm-2']) !!}
            <div class="col-sm-10">
                {!! Form::text('picture', $edit ? $student->picture : null, ['class'=>'form-control', 'placeholder'=>'Input Picture']) !!}
                {!! $errors->has('picture') ? $errors->first('picture', '<p class="help-block">:message</p>') : ""!!}
            </div>
            
        </div>

        <div class="form-group">
            <div class="col-sm-2">
                
            </div>
            <div class="col-sm-10">
                @include('layouts._submit-button')
            </div>
        </div>
    </div>
</div>

@section('script')
    <script>
        $(function(){
            $('#birthdate').datepicker({
                autoclose: true
            });
        })
    </script>

@endsection