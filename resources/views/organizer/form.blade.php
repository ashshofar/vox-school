<div class="row">
    <div class="col-md-12">
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">

            {!! Form::label('store_name', 'Nama Toko', ['class'=>'control-label col-sm-2 col-sm-2']) !!}
            <div class="col-sm-10">
                {!! Form::text('store_name', null, ['class'=>'form-control', 'placeholder'=>'Masukan nama toko']) !!}
                {!! $errors->has('name') ? $errors->first('name', '<p class="help-block">:message</p>') : ""!!}
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