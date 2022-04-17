@extends('layouts.app')

@section('template_title')
    {{ $registro->name ?? 'Show Registro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Vista de Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registros.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Usuarios Id:</strong>
                            {{ $registro->usuario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $registro->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Linea:</strong>
                            {{ $registro->linea }}
                        </div>
                        <div class="form-group">
                            <strong>Palma:</strong>
                            {{ $registro->palma }}
                        </div>
                        <div class="form-group">
                            <strong>Enfermedads Id:</strong>
                            {{ $registro->enfermedad->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Lotes Id:</strong>
                            {{ $registro->lote->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
