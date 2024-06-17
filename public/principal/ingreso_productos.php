<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de productos</title>	
    <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
</head>
<body class="cuerpo">
  <?php 
  include_once "cabezera.php";
  ?>
  <?php require_once 'ingreso_producto.php';?>
    <?php  
      $mysqli = new mysqli ("localhost","root","","panaderia") or die (mysqli_error());
      $variable=$mysqli->query("SELECT * FROM productos") or die (mysqli_error()); ?>
  <div class="container bg-secondary my-3 py-3">
    <center><h1 class=" col-8  text-white">Ingreso de productos</h1></center>
   <form class="row g-3" method="POST" action="ingreso_producto.php" enctype="multipart/form-data">
    <div class="col-md-12">
      <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id;?>">
    </div>
    <div class="col-md-4">
      <label for="producto" class="form-label text-white">Producto</label>
      <input type="text" class="form-control" id="producto" name="producto"  placeholder="Ingrese un producto" required value="<?php echo $producto;?>">
    </div>
    <div class="col-md-4">
      <label for="file" class="form-label text-white">Imagen</label>
      <input type="file"  id="imagen" name="imagen"   value="<?php echo $imagen;?>">
    </div>
    <div class="col-md-4">
      <label for="descripcion" class="form-label text-white">Descripcion</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion"  placeholder="Ingrese la descripcion"required value="<?php echo $descripcion;?>">
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
            <th scope="col" class="bg-secondary text-white">Id</th>
            <th scope="col" class="bg-secondary text-white">Nombre</th>
            <th scope="col" class="bg-secondary text-white">Imagen</th>
            <th scope="col" class="bg-secondary text-white">Descripcion</th>
            <th scope="col" class="bg-secondary text-white" colspan="2">Accion</th>
        </row>
        </thead>
       <tbody class="text-center">
            <row>
                <?php while ($fila= $variable->fetch_assoc()){?>
                <td scope="col" class="bg-secondary text-white"><?php echo $fila ['id'];?></td>
                <td scope="col" class="bg-secondary text-white"><?php echo $fila ['producto'];?></td>
                <td scope="col" class="bg-secondary text-white"><img src="../../archivos/imagenes/<?php echo $fila ['imagen'];?>" class="pp"></td>
                <td scope="col" class="bg-secondary text-white"><?php echo $fila ['descripcion'];?></td>
                
                <td scope="col" class="bg-secondary text-white"> <a href="ingreso_productos.php?eliminar=<?php echo $fila['id'];?>" class="btn btn-danger">Eliminar</a></td>
                <td scope="col" class="bg-secondary text-white"><a href="ingreso_productos.php?editar=<?php echo $fila['id'];?>" class="btn btn-light">Editar</a></td>
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