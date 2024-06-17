<?php
//para limpiar los forumlarios
$id =0;
$producto="";
$imagen="";
$descripcion="";
$editar=false;
//realizar la conexion a la base de datos 
$mysqli = new mysqli ("localhost","root","","panaderia") or die (mysqli_error());
//pregunto si exite el envio de datos
//Si se quiere subir una imagen
if(isset ($_POST['guardar']) ){
    //recuperar los datos 
    $producto = $_POST ['producto'];
    $imagen = $_FILES['imagen']['name'];
    $directorio = '../../archivos/imagenes/';
    $archivoimg = $directorio.$imagen;
    move_uploaded_file($_FILES['imagen']['tmp_name'],$archivoimg);

    $descripcion = $_POST['descripcion'];
    //insertar registros
      $mysqli->query("INSERT INTO productos(producto,imagen,descripcion) values ('$producto','$imagen','$descripcion')") or die (mysqli_error());  
      header('location:ingreso_productos.php');  
}
if (isset ($_GET['eliminar'])){
    $id=$_GET['eliminar'];
      $mysqli->query("DELETE FROM productos WHERE id=$id") or die ($mysqli->error);
      header('location:ingreso_productos.php');
}
if(isset ($_GET['editar'])){
    $id=$_GET['editar'];
      $registro=$mysqli->query("SELECT * FROM productos WHERE id=$id") or die ($mysqli->error);
      $clientes=$registro -> fetch_assoc();
      $id=$clientes['id'];
      $producto=$clientes['producto'];
      $imagen=$clientes['imagen'];
      $descripcion=$clientes['descripcion'];
      $editar = true;
}
if (isset ($_POST['actualizar'])){
    $producto = $_POST ['producto'];
    $descripcion = $_POST['descripcion'];
    $id=$_POST['id'];
       $mysqli->query("UPDATE productos SET producto='$producto', descripcion='$descripcion' WHERE id=$id") or die ($mysqli->error);
            header('location:ingreso_productos.php');
}

if (isset ($_POST['actualizar'])){
    $imagen = $_FILES['imagen']['name'];
    $directorio = '../../archivos/imagenes/';
    $archivoimg = $directorio.$imagen;
    if(move_uploaded_file($_FILES['imagen']['tmp_name'],$archivoimg)){
            $id=$_POST['id'];
              $mysqli->query("UPDATE productos SET  imagen='$imagen' WHERE id=$id") or die ($mysqli->error);
            header('location:ingreso_productos.php');
    }
}
?>