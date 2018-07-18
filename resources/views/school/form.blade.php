<div class="row">
    <div class="col-md-12">
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">

            {!! Form::label('name', 'School Name', ['class'=>'control-label col-sm-2 col-sm-2']) !!}
            <div class="col-sm-10">
                {!! Form::text('name', $edit ? $school->name : null, ['class'=>'form-control', 'placeholder'=>'Input school name']) !!}
                {!! $errors->has('name') ? $errors->first('name', '<p class="help-block">:message</p>') : ""!!}
            </div>
        
        </div>

        <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">

            {!! Form::label('address', 'Address', ['class'=>'control-label col-sm-2 col-sm-2']) !!}
            <div class="col-sm-10">
                {!! Form::text('address', $edit ? $school->address : null, ['class'=>'form-control', 'placeholder'=>'Input school address']) !!}
                {!! $errors->has('address') ? $errors->first('address', '<p class="help-block">:message</p>') : ""!!}
            </div>
            
        </div>

        <div class="form-group {{ $errors->has('max_student') ? ' has-error' : '' }}">

            {!! Form::label('max_student', 'Maximum students allowed', ['class'=>'control-label col-sm-2 col-sm-2']) !!}
            <div class="col-sm-10">
                {!! Form::text('max_student', $edit ? $school->max_student : null, ['class'=>'form-control', 'placeholder'=>'Input maximum students allowed']) !!}
                {!! $errors->has('max_student') ? $errors->first('max_student', '<p class="help-block">:message</p>') : ""!!}
            </div>
            
        </div>

        <div class="form-group {{ $errors->has('annual_fee') ? ' has-error' : '' }}">

                {!! Form::label('annual_fee', 'Courses yearly fee', ['class'=>'control-label col-sm-2 col-sm-2']) !!}
                <div class="col-sm-10">
                    {!! Form::text('annual_fee', $edit ? $school->annual_fee : null, ['class'=>'form-control', 'placeholder'=>'Input courses yearly fee']) !!}
                    {!! $errors->has('annual_fee') ? $errors->first('annual_fee', '<p class="help-block">:message</p>') : ""!!}
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