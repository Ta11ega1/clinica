@extends('layouts.app')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	usuarios
                	
                </div>
                <div class="card-body">
                  	<table class="table table-striped table-hover">
                  		<thead>
                  			<tr>
                  				<th width="10px">ID</th>
                  				<th>Nombre</th>
                          <th>Email</th>
                          <th>Rut</th>
                          <th>Fecha de Nacimiento</th>
                          <th>Telefono</th>
                  				<th colspan="3">&nbsp;</th>
                  			</tr>                  			
                  		</thead>
                  		<tbody>
                  			@foreach($users as $user)
                  			<tr>
                  				<td>{{ $user->id }}</td>
                  				<td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->rut }}</td>
                          <td>{{ $user->fechaN }}</td>
                          <td>{{ $user->telefono }}</td>
                  				<td width="10px">
	                  				@can('users.show')
	                  				<a href="{{ route('users.show',
	                  				$user->id) }}" 
	                  				class="btn btn-light">
	                  					Ver
	                  				</a>
	                  				@endcan
	                  			</td>
	                  			<td width="10px">
	                  				@can('users.edit')
	                  				<a href="{{ route('users.edit',
	                  				$user->id) }}" 
	                  				class="btn btn-danger">
	                  					Editar
	                  				</a>
	                  				@endcan
	                  			</td>
	                  			<td width="10px">
	                  				@can('users.destroy')
	                  				{!! Form::open([ 'route' => ['users.destroy', $user->id], 'method' => 'DELETE'])!!}
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
                  	{{ $users -> render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
