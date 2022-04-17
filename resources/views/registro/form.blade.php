<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('usuarios_id') }}
            {{ Form::text('usuarios_id', $registro->usuarios_id, ['class' => 'form-control' . ($errors->has('usuarios_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuarios Id']) }}
            {!! $errors->first('usuarios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $registro->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('linea') }}
            {{ Form::text('linea', $registro->linea, ['class' => 'form-control' . ($errors->has('linea') ? ' is-invalid' : ''), 'placeholder' => 'Linea']) }}
            {!! $errors->first('linea', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('palma') }}
            {{ Form::text('palma', $registro->palma, ['class' => 'form-control' . ($errors->has('palma') ? ' is-invalid' : ''), 'placeholder' => 'Palma']) }}
            {!! $errors->first('palma', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('enfermedads_id') }}
            {{ Form::text('enfermedads_id', $registro->enfermedads_id, ['class' => 'form-control' . ($errors->has('enfermedads_id') ? ' is-invalid' : ''), 'placeholder' => 'Enfermedads Id']) }}
            {!! $errors->first('enfermedads_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lotes_id') }}
            {{ Form::text('lotes_id', $registro->lotes_id, ['class' => 'form-control' . ($errors->has('lotes_id') ? ' is-invalid' : ''), 'placeholder' => 'Lotes Id']) }}
            {!! $errors->first('lotes_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>