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
                	{!! Form::model($medic, ['route' => ['medics.update', $medic->id], 'method' => 'PUT']) !!}

                			@include('medics.partials.form')
                	{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection     