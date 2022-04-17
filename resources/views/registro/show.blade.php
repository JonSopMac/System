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
                            <span class="card-title">Show Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Usuarios Id:</strong>
                            {{ $registro->usuarios_id }}
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
                            {{ $registro->enfermedads_id }}
                        </div>
                        <div class="form-group">
                            <strong>Lotes Id:</strong>
                            {{ $registro->lotes_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
