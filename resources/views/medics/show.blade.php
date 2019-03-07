@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Medico
                </div>
                <div class="card-body">
                    <p><strong>Rut</strong> {{ $medic->rut }}</p>
                	<p><strong>Nombre</strong> {{ $medic->Nombre }}</p>
                	<p><strong>especialidad</strong> {{ $medic->especialidad }}</p>
                    <p><strong>Fecha de Contratación</strong> {{ $medic->fecha_contratacion }}</p>
                    <p><strong>Valor de Consulta</strong> {{ $medic->valor_consulta }}</p>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection     