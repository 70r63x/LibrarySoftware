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
<br>
<?php
$query="select * from invitados";//selecciona todos los datos de la tabla de usuarios 
$resultado=mysql_query($query,$con);//ejecuta la consulta
echo "<table border='1'>
	<tr>
		<td>Id Libro</td>
		<td>Cod. Libro</td>
		<td>Titulo</td>
		<td>Fecha</td>
		<td>Clasificación</td>
		<td>Actualizar</td>
	</tr>";
while ($dato=mysql_fetch_array($resultado)){
echo "<tr>";
echo "<td>" . $dato["id_libro"]. "</td>";
echo "<td>" . $dato["cod_libro"]. "</td>";
echo "<td>" . $dato["titulo"]. "</td>";
echo "<td>" . $dato["fecha"]. "</td>";
echo "<td>" . $dato["clasificacion"]. "</td>";
echo "<td> <a href=editar_datobibli.php?id=" . $dato['id_libro'] . ">Editar</a></td>";
echo "</tr>";
}     
echo "</table>";


?>


</center>
</body>
</html>