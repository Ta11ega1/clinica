@extends('layouts.app')

@section('content')
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Medico
                  &nbsp;
                	@can('medics.create')
                	<a href="{{route('medics.create') }}"
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
                  				<th>Rut</th>
                          <th>Nombre</th>
                          <th>Especialidad</th>
                          <th>Fecha de Contratación</th>
                          <th>Valor de Consulta</th>
                  				<th colspan="3">&nbsp;</th>
                  			</tr>                  			
                  		</thead>
                  		<tbody>
                  			@foreach($medics as $medic)
                  			<tr>
                  				<td>{{ $medic->id }}</td>
                          <td>{{ $medic->rut }}</td>
                  				<td>{{ $medic->Nombre }}</td>
                          <td>{{ $medic->especialidad }}</td>
                          <td>{{ $medic->fecha_contratacion }}</td>
                          <td>{{ $medic->valor_consulta }}</td>
                        	<td>
	                  				@can('medics.show')
	                  				<a href="{{ route('medics.show',
	                  				$medic->id) }}" 
	                  				class="btn btn-light">
	                  					Ver
	                  				</a>
	                  				@endcan
	                  			</td>
	                  			<td>
	                  				@can('medics.edit')
	                  				<a href="{{ route('medics.edit',
	                  				$medic->id) }}" 
	                  				class="btn btn-danger">
	                  					Editar
	                  				</a>
	                  				@endcan
	                  			</td>
	                  			<td class="col">
	                  				@can('medics.destroy')
	                  				{!! Form::open([ 'route' => ['medics.destroy', $medic->id], 'method' => 'DELETE'])!!}
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
                  	{{ $medics -> render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
