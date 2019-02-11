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
<br>
<?php
$query="select * from contenido1";//selecciona todos los datos de la tabla de usuarios 
$resultado=mysql_query($query,$con);//ejecuta la consulta
echo "<table border='1'>
	<tr>
		<td>Id Prestamo</td>
		<td>Cod Prestamo</td>
		<td>Nombre de Estudiante</td>
		<td>Libro</td>
		<td>Fecha Prestamo</td>
		<td>Grado</td>
		<td>Actualizar</td>
	</tr>";
while ($dato=mysql_fetch_array($resultado)){
echo "<tr>";
echo "<td>" . $dato["id_pres"]. "</td>";
echo "<td>" . $dato["cod_pres"]. "</td>";
echo "<td>" . $dato["nombre_pres"]. "</td>";
echo "<td>" . $dato["libro"]. "</td>";
echo "<td>" . $dato["fecha_pres"]. "</td>";
echo "<td>" . $dato["grado"]. "</td>";
echo "<td> <a href=editar_pres1.php?id=" . $dato['id_pres'] . ">Editar</a></td>";
echo "</tr>";
}     
echo "</table>";


?>


</center>
</body>
</html>