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
<h2>Prestamos</h2>

<?php
$id = $_POST['id_pres']; 

$c = $_POST['nom_c']; 
$n = $_POST['nom_n'];
$l = $_POST['nom_l']; 
$f = $_POST['nom_f'];
$g = $_POST['nom_g'];

$sSQL="UPDATE contenido1 SET cod_pres='$c',nombre_pres='$n',libro='$l',fecha_pres='$f',grado='$g' where id_pres='$id'";  

if (mysql_query($sSQL)){
echo "<br> Actualizacion Realizada";
echo "<br> <a href='ver_pres.php'> Volver </a>";
}
else{
echo "No se pudo Actualizar";
echo "<br> <a href='ver_pres.php'> Volver </a>";
}

?>
<?php
 mysql_close($con);


?>
