<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $usuario->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('generos_id') }}
            {{ Form::select('generos_id', $generos, $usuario->generos_id, ['class' => 'form-control' . ($errors->has('generos_id') ? ' is-invalid' : ''), 'placeholder' => 'Generos Id']) }}
            {!! $errors->first('generos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nacimiento') }}
            {{ Form::text('fecha_nacimiento', $usuario->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargos_id') }}
            {{ Form::select('cargos_id', $cargos, $usuario->cargos_id, ['class' => 'form-control' . ($errors->has('cargos_id') ? ' is-invalid' : ''), 'placeholder' => 'Cargos Id']) }}
            {!! $errors->first('cargos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_ingreso') }}
            {{ Form::text('fecha_ingreso', $usuario->fecha_ingreso, ['class' => 'form-control' . ($errors->has('fecha_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Ingreso']) }}
            {!! $errors->first('fecha_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rols_id') }}
            {{ Form::select('rols_id', $rols, $usuario->rols_id, ['class' => 'form-control' . ($errors->has('rols_id') ? ' is-invalid' : ''), 'placeholder' => 'Rols Id']) }}
            {!! $errors->first('rols_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>