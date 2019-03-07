@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Usuario
                </div>
                <div class="card-body">
                	<p><strong>Nombre</strong> {{ $user->name }}</p>
                	<p><strong>Email</strong> {{ $user->email }}</p>
                    <p><strong>Rut</strong> {{ $user->rut }}</p>
                    <p><strong>Fecha de Nacimiento</strong> {{ $user->fechaN }}</p>
                    <p><strong>Telefono</strong> {{ $user->telefono }}</p>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection     