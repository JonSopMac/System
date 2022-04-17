@extends('layouts.app')

@section('template_title')
    {{ $lote->name ?? 'Show Lote' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Lote</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lotes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $lote->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Anio Siembra:</strong>
                            {{ $lote->anio_siembra }}
                        </div>
                        <div class="form-group">
                            <strong>Variedads Id:</strong>
                            {{ $lote->variedads_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fincas Id:</strong>
                            {{ $lote->fincas_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
