<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<hr>
<h3>Lista de roles</h3>
<div class="form-group">
	<ul class="List-unstyled">
		@foreach($roles as $role)
		<li>
			<label>
				{{ Form::checkbox('roles[]', $role->id, null) }}
				{{ $role->name }}
				<em>({{ $role->description ?: 'N/A' }})</em>
			</label>
		</li>
		@endforeach
	</ul>
	<h3>Lista de permisos</h3>
	<ul class="List-unstyled">
		@foreach($permissions as $permission)
		<li>
			<label>
				{{ Form::checkbox('permissions[]', $permission->id, null) }}
				{{ $permission->name }}
				<em>({{ $permission->description ?: 'Sin descripción' }})</em>
			</label>
		</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>