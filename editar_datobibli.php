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
include ("menu_bibli.html");
?>




<?php
$id=$_GET['id'];
$query="select * from invitados where id_libro=" . $id;
$resultado=mysql_query($query, $con);
$dato=mysql_fetch_object($resultado);
?>

<form action="editar_datobibli1.php" method="post">
<input type="hidden" name="id_libro" value="<?php echo $id; ?>" />
Codigo libro: <input type="text" name="nom_c" value="<?php echo $dato->cod_libro; ?>"  /> <br>
Titulo Libro: <input type="text" name="nom_t" value="<?php echo $dato->titulo; ?>"  /> <br>
Fecha Ingreso: <input type="text" name="nom_f" value="<?php echo $dato->fecha; ?>"  /> <br>
Clasificación: <input type="text" name="nom_cl" value="<?php echo $dato->clasificacion; ?>"  /> <br>
<input type="submit" value="Actualizar" /> 
</form>

	