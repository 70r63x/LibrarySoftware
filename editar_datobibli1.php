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
<h2>Biblioteca</h2>

<?php
$id = $_POST['id_libro']; 

$cod_l = $_POST['nom_c']; 
$titulo = $_POST['nom_t'];
$fecha = $_POST['nom_f'];
$clasi = $_POST['nom_cl'];

$sSQL="UPDATE invitados SET cod_libro='$cod_l',titulo='$titulo',fecha='$fecha',clasificacion='$clasi' where id_libro='$id'";  

if (mysql_query($sSQL)){
echo "<br> Actualizacion Realizada";
echo "<br> <a href='ver_bibli.php'> Volver </a>";
}
else{
echo "No se pudo Actualizar";
echo "<br> <a href='ver_bibli.php'> Volver </a>";
}

?>
<?php
 mysql_close($con);


?>
