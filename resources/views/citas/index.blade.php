@extends('layouts.app')

@section('content')
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Citas
                  &nbsp;
                	@can('citas.citas')
                	<a href="{{route('citas.citas') }}"
                	class="btn btn-sm btn-primary pull-right">
            		    Crear 
            		</a>
                	@endcan
                </div>
                <div class="card-body">
                  	<table class="table table-striped table-hover">
                  		<thead>
                  			<tr>
                  				<th width="10px">ID</th>
                  				<th>Fecha</th>
		                        <th>Hora</th>
		                        <th>Paciente</th>
		                        <th>Medico</th>
		                        <th>Estado</th>
                  				<th colspan="3">&nbsp;</th>
                  			</tr>                  			
                  		</thead>
                  		<tbody>
                  			@foreach($citas as $cita)
                  			<tr>
                  				<td>{{ $cita->id }}</td>
                          		<td>{{ $cita->fecha }}</td>
                  				<td>{{ $cita->hora }}</td>
		                        <td>{{ $cita->paciente }}</td>
		                        <td>{{ $cita->medico }}</td>
		                        <td>{{ $cita->estado }}</td>
	                  			<td>
	                  				@can('citas.edit')
	                  				<a href="{{ route('citas.edit',
	                  				$cita->id) }}" 
	                  				class="btn btn-danger">
	                  					Editar
	                  				</a>
	                  				@endcan
	                  			</td>
	                  			<td class="col">
	                  				@can('citas.destroy')
	                  				{!! Form::open([ 'route' => ['citas.destroy', $cita->id], 'method' => 'DELETE'])!!}
	                  						<button class='btn btn-sm btn-default'>
	                  							Eliminar
	                  						</button>
	                  				{!! Form::close() !!}
	                  				@endcan
	                  			</td>
                  			</tr>
                  			@endforeach
                  		</tbody>
                  	</table>
                  	{{ $citas -> render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
