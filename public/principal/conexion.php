<?php
//para limpiar los forumlarios
$id =0;
$nombre="";
$apellido="";
$genero="";
$email="";
$ciudad="";
$fecha_nacimiento="";
$telefono="";
$celular="";
$direccion="";
$editar=false;
//realizar la conexion a la base de datos 
$mysqli = new mysqli ("localhost","root","","panaderia") or die (mysqli_error());
//pregunto si exite el envio de datos
if(isset ($_POST['guardar']) ){
    //recuperar los datos 
    $nombre = $_POST ['nombre'];
    $apellido = $_POST ['apellido'];
    $genero = $_POST ['genero'];
    $email = $_POST ['email'];
    $ciudad = $_POST ['ciudad'];
    $fecha_nacimiento = $_POST ['fecha_nacimiento'];
    $telefono = $_POST ['telefono'];
    $celular = $_POST ['celular'];
    $direccion = $_POST ['direccion'];
    //insertar registros
    $mysqli->query("INSERT INTO clientes(nombre,apellido,genero,email,ciudad,fecha_nacimiento,telefono,celular,direccion) values ('$nombre','$apellido','$genero','$email','$ciudad','$fecha_nacimiento','$telefono','$celular','$direccion')") or die (mysqli_error());  
    header('location:registro_clientes.php');  
}
if (isset ($_GET['eliminar'])){
    $id=$_GET['eliminar'];
    $mysqli->query("DELETE FROM clientes WHERE id=$id") or die ($mysqli->error);
    header('location:registro_clientes.php');
}
if(isset ($_GET['editar'])){
    $id=$_GET['editar'];
    $registro=$mysqli->query("SELECT * FROM clientes WHERE id=$id") or die ($mysqli->error);
    $clientes=$registro -> fetch_assoc();
    $id=$clientes['id'];
    $nombre = $clientes ['nombre'];
    $apellido = $clientes ['apellido'];
    $genero = $clientes ['genero'];
    $email = $clientes ['email'];
    $ciudad = $clientes ['ciudad'];
    $fecha_nacimiento = $clientes ['fecha_nacimiento'];
    $telefono = $clientes ['telefono'];
    $celular = $clientes ['celular'];
    $direccion = $clientes ['direccion'];
    $editar = true;
}
if (isset ($_POST['actualizar'])){
   $nombre = $_POST ['nombre'];
    $apellido = $_POST ['apellido'];
    $genero = $_POST ['genero'];
    $email = $_POST ['email'];
    $ciudad = $_POST ['ciudad'];
    $fecha_nacimiento = $_POST ['fecha_nacimiento'];
    $telefono = $_POST ['telefono'];
    $celular = $_POST ['celular'];
    $direccion = $_POST ['direccion'];
    $id=$_POST['id'];
   $mysqli->query("UPDATE clientes SET nombre='$nombre', apellido='$apellido', genero='$genero', email='$email', ciudad='$ciudad', fecha_nacimiento='$fecha_nacimiento', telefono='$telefono', celular='$celular', direccion='$direccion' WHERE id=$id") or die ($mysqli->error);
    header('location:registro_clientes.php');

}
?>
