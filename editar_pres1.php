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
include ("menu_pres.html");
?>




<?php
$id=$_GET['id'];
$query="select * from contenido1 where id_pres=" . $id;
$resultado=mysql_query($query, $con);
$dato=mysql_fetch_object($resultado);
?>

<form action="editar_datopres.php" method="post">
<input type="hidden" name="id_pres" value="<?php echo $id; ?>" />
El Codigo es: <input type="text" name="nom_c" value="<?php echo $dato->cod_pres; ?>"  /> <br>
El Nombre de Estudiante es: <input type="text" name="nom_n" value="<?php echo $dato->nombre_pres; ?>"  /> <br>
El Libro es: <input type="text" name="nom_l" value="<?php echo $dato->libro; ?>"  /> <br>
La Fecha de Prestamo es: <input type="text" name="nom_f" value="<?php echo $dato->fecha_pres; ?>"  /> <br>
El Grado es: <input type="text" name="nom_g" value="<?php echo $dato->grado; ?>"  /> <br>
<input type="submit" value="Actualizar" /> 
</form>

	