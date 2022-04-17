<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $lote->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anio_siembra') }}
            {{ Form::text('anio_siembra', $lote->anio_siembra, ['class' => 'form-control' . ($errors->has('anio_siembra') ? ' is-invalid' : ''), 'placeholder' => 'Anio Siembra']) }}
            {!! $errors->first('anio_siembra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('variedads_id') }}
            {{ Form::select('variedads_id',$variedads, $lote->variedads_id, ['class' => 'form-control' . ($errors->has('variedads_id') ? ' is-invalid' : ''), 'placeholder' => 'Variedads Id']) }}
            {!! $errors->first('variedads_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fincas_id') }}
            {{ Form::select('fincas_id', $fincas, $lote->fincas_id, ['class' => 'form-control' . ($errors->has('fincas_id') ? ' is-invalid' : ''), 'placeholder' => 'Fincas Id']) }}
            {!! $errors->first('fincas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>