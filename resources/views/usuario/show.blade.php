@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Generos Id:</strong>
                            {{ $usuario->generos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $usuario->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Cargos Id:</strong>
                            {{ $usuario->cargos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ingreso:</strong>
                            {{ $usuario->fecha_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Rols Id:</strong>
                            {{ $usuario->rols_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
