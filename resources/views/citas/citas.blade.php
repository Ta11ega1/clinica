<?php
$mensaje='';
try{
    $conexion = new PDO('mysql:host=localhost;dbname=hospital','root','');
}catch(PDOException $e){
    echo "Error: ". $e->getMessage();
}
//SELECT PARA MEDICOS
$medicos = $conexion -> prepare("SELECT * FROM medics");

$medicos ->execute();
$medicos = $medicos ->fetchAll();

//SELECT PARA PACIENTES
$pacientes = $conexion -> prepare("SELECT u.name, u.email, u.rut, u.fechaN, u.telefono
from users u join permission_user p 
where u.id = p.user_id and p.permission_id =10
and (select count(user_id) from permission_user where user_id = p.user_id group by user_id) = 1;");

$pacientes ->execute();
$pacientes = $pacientes ->fetchAll();
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="card">
                <div class="card-header">
                    <strong>Citas</strong>
                </div>

                <div class=" card-body">

                    {!! Form::open(['route' => 'citas.store']) !!}

                       
                        <div class="form-group">
                            <label for="fecha" class="col-sm-3 control-label">Fecha</label>

                            <div class="col-sm-6">
                                <input type="date" name="fecha" class="form-control" >
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="hora" class="col-sm-3 control-label">Hora</label>

                            <div class="col-sm-6">
                                <input type="time" name="hora" class="form-control" >
                            </div>
                        </div>

                        <!-- COMBO BOX CARGA PACIENTES -->
                        <div class="form-group">

                            <div class="control-label">

                                <label for=name class="col-sm-3 control-label">Pacientes:</label>
                                

                                <select name="paciente" required> 
                                <?php foreach ($pacientes as $Sql): ?>
                                <?php echo "<option value='". $Sql['name']. "'>". $Sql['name']." </option>"; ?>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

     
                        <!-- COMBO BOX CARGA MEDICOS -->
                        <div class="form-group">

                            <div class="control-label">

                                <label for=name class="col-sm-3 control-label">Medicos:</label>
                                <select name="medico" required> 
                                <?php foreach ($medicos as $Sql): ?>
                                <?php echo "<option value='". $Sql['Nombre']. "'>". $Sql['Nombre']." </option>"; ?>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>                      


                        <div class="form-group">
                            <label for="estado" class="col-sm-3 control-label">Estado</label>

                            <div class="col-sm-6">
                                    <select name="estado">
                                      <option value="Agendada">Agendada</option>
                                      <option value="Confirmada">Confirmada</option>
                                      <option value="Anulada">Anulada</option>
                                      <option value="Perdida">Perdida</option>
                                      <option value="Realizada">Realizada</option>
                                    </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-primary">
                                    Agregar Cita
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
