
<div class="form-group">
	{{ Form::label('rut', 'Rut') }}
	<input id="rut" type="text" class="form-control{{ $errors->has('rut') ? ' is-invalid' : '' }}" name="rut" value="{{ old('rut') }}" required autofocus>
</div>
<div class="form-group">
	{{ Form::label('Nombre', 'Nombre del Doctor') }}
	<input id="Nombre" type="text" class="form-control{{ $errors->has('Nombre') ? ' is-invalid' : '' }}" name="Nombre" value="{{ old('Nombre') }}" required autofocus>
</div>
<div class="form-group">
	{{ Form::label('especialidad', 'Especialidad') }}
	<input id="especialidad" type="text" class="form-control{{ $errors->has('especialidad') ? ' is-invalid' : '' }}" name="especialidad" value="{{ old('especialidad') }}" required autofocus>
</div>
<div class="form-group">
	{{ Form::label('fecha_contratacion', 'Fecha de contratación') }}
	{{ Form::date('fecha_contratacion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('valor_consulta', 'Valor de consulta') }}
	<input id="valor_consulta" type="text" class="form-control{{ $errors->has('valor_consulta') ? ' is-invalid' : '' }}" name="valor_consulta" value="{{ old('valor_consulta') }}" required autofocus onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


