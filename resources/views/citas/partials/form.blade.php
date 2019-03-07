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

<div class="form-group">
	{{ Form::label('fecha', 'Fecha de Atención') }}
	{{ Form::date('fecha', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('hora', 'Hora de Atención') }}
	{{ Form::time('hora', null, ['class' => 'form-control']) }}
</div>

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
<div class="form-group">

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
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


