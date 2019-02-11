<?php
session_start();
if(isset($_SESSION['restringir'])==1){

}
else{
echo "<script languaje='javascript'>window.location='index.php'</script>";
}
?>

<?php
include("conexion.php");
$con=conectar();
?>

<!DOCTYPE html>
<html lang="esp">
<meta charset="utf-8">
<head>
<title>
		Institución Educativa Combia Biblioteca

	</title>
</head>
<body>

<center>
<h2>Usuarios</h2>

<?php
$id = $_POST['id_usuario']; 

$nombre = $_POST['nom_n']; 
$usuario = $_POST['nom_u'];
$clave = $_POST['clave_2']; 

$sSQL="UPDATE usuario SET Nombre='$nombre',usuario='$usuario',clave='$clave' where id_usuario='$id'";  

if (mysql_query($sSQL)){
echo "<br> Actualizacion Realizada";
echo "<br> <a href='ver_usu.php'> Volver </a>";
}
else{
echo "No se pudo Actualizar";
echo "<br> <a href='ver_usu.php'> Volver </a>";
}

?>
<?php
 mysql_close($con);


?>
