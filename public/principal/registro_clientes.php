<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro clientes</title>
    <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
    <script type="text/javascript" src="../../js/validar.js"></script>
</head>
<body class="cuerpo">
  <?php 
  include_once "cabezera.php";
  ?>
  <?php require_once 'conexion.php';?>
    <?php  
      
      $mysqli = new mysqli ("localhost","root","","panaderia") or die (mysqli_error());
      $variable=$mysqli->query("SELECT * FROM clientes") or die (mysqli_error()); ?>
  <div class="container bg-secondary my-3 py-3">
    <center><h1 class=" col-8  text-white">Formulario datos personales</h1></center>
   <form class="row g-3" method="POST" action="conexion.php">
    <div class="col-md-12">
      <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id;?>" >
    </div>
    <div class="col-md-4">
      <label for="nombre" class="form-label text-white">Nombres</label>
      <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Ingrese nombres" required value="<?php echo $nombre;?>" onkeypress="return validar(event)">
    </div>
    <div class="col-md-4">
      <label for="apellido" class="form-label text-white">Apellidos</label>
      <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Ingrese apellidos"required value="<?php echo $apellido;?>" onkeypress="return validar(event)">
    </div>
    <div class="col-md-4">
      <label for="genero" class="form-label text-white">Genero</label>
      <input type="text" class="form-control" id="genero" name="genero"  placeholder="Ingrese genero"required value="<?php echo $genero;?>" onkeypress="return validar(event)">
    </div>
    <div class="col-md-4">
    <label for="email" class="form-label text-white">Correo electronico</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend2" placeholder="Ingrese coreo" required value="<?php echo $email;?>">
    </div>
  </div>
    <div class="col-md-4">
      <label for="ciudad" class="form-label text-white">Ciudad</label>
      <input type="text" class="form-control" id="ciudad" name="ciudad" required value="<?php echo $ciudad;?>" placeholder="Ingrese ciudad" onkeypress="return validar(event)">
    </div>
    <div class="col-md-4">
      <label for="fecha" class="form-label text-white">Fecha de nacimiento</label>
      <input type="date" class="form-control" id="fecha" name="fecha_nacimiento" placeholder="Ingrese fecha de nacimiento" required value="<?php echo $fecha_nacimiento;?>">
    </div>
    <div class="col-md-4">
      <label for="telefono" class="form-label text-white">Telefono</label>
      <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el telefono" required value="<?php echo $telefono;?>">
    </div>
    <div class="col-md-4">
      <label for="celular" class="form-label text-white">Celular</label>
      <input type="number" class="form-control" id="celular" name="celular" placeholder="Ingrese elcelular" required value="<?php echo $celular;?>">
    </div>
    <div class="col-md-4">
      <label for="direccion" class="form-label text-white">Direccion</label>
      <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la direccion" required value="<?php echo $direccion;?>">
    </div>
    <div class="col-12">
       <?php  if ($editar) { ?>
        <button type="submit" name="actualizar" class="btn btn-success" >Actualizar</button>
      <?php }else{?>
        <button type="submit" class="btn btn-success" name="guardar">Guardar</button>
           <?php }?>
    </div>
  </form>
</div>
<div class="container">
<table class="table text-center">
         <thead class="text-white text-center">
        <row>
            <th scope="col" class="bg-secondary text-white" >Id</th>
            <th scope="col" class="bg-secondary text-white">Nombre</th>
            <th scope="col" class="bg-secondary text-white">Apellido</th>
            <th scope="col" class="bg-secondary text-white">Genero</th>
            <th scope="col" class="bg-secondary text-white">Coreo</th>
            <th scope="col" class="bg-secondary text-white">Ciudad</th>
            <th scope="col" class="bg-secondary text-white">Fecha de nacimiento</th>
            <th scope="col" class="bg-secondary text-white">Telefono</th>
            <th scope="col" class="bg-secondary text-white">Celular</th>
            <th scope="col" class="bg-secondary text-white">Direccion</th>
            <th scope="col" class="bg-secondary text-white" colspan="2">Accion</th>
        </row>
        </thead>
       <tbody>
            <row>
                <?php
                $cont = 1; 
                while ($fila= $variable->fetch_assoc()){
                  ?>
                <td scope="col" class="bg-secondary text-white"><?php echo $cont++;?></td>
                <td scope="col" class="bg-secondary text-white"><?php echo $fila ['nombre'];?></td>
                <td scope="col" class="bg-secondary text-white"><?php echo $fila ['apellido'];?></td>
                <td scope="col" class="bg-secondary text-white"><?php echo $fila ['genero'];?></td>
                <td scope="col" class="bg-secondary text-white"><?php echo $fila ['email'];?></td>
                <td scope="col" class="bg-secondary text-white"><?php echo $fila ['ciudad'];?></td>
                <td scope="col" class="bg-secondary text-white"><?php echo $fila ['fecha_nacimiento'];?></td>
                <td scope="col" class="bg-secondary text-white"><?php echo $fila ['telefono'];?></td>
                <td scope="col" class="bg-secondary text-white"><?php echo $fila ['celular'];?></td>
                <td scope="col" class="bg-secondary text-white"><?php echo $fila ['direccion'];?></td>
                
                <td scope="col" class="bg-secondary text-white"> <a href="registro_clientes.php?eliminar=<?php echo $fila['id'];?>" class="btn btn-danger">Eliminar</a></td>
                <td scope="col" class="bg-secondary text-white"><a href="registro_clientes.php?editar=<?php echo $fila['id'];?>" class="btn btn-light">Editar</a></td>
            </row>
        </tbody>
        <?php } ?> 
    </table>
   </div> 
  <?php 
  include_once "footer.php";
  ?>
</body>
</html>