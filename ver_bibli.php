<?php
include ("conexion.php");
$con=conectar();
session_start();
if(isset($_SESSION['restringir'])==1){

}
else{
echo "<script languaje='javascript'>window.location='index.php'</script>";
}		
?>
<!DOCTYPE html>
<html lang="esp">
<meta charset="utf-8">
<head>
<title>admin</title>
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
		<td>Codigo Libro</td>
		<td>Titulo</td>
		<td>Fecha de Ingreso</td>
		<td>Clasificaci�n</td>
	</tr>";
while ($dato=mysql_fetch_array($resultado)){
echo "<tr>";
echo "<td>" . $dato["id_libro"]. "</td>";
echo "<td>" . $dato["cod_libro"]. "</td>";
echo "<td>" . $dato["titulo"]. "</td>";
echo "<td>" . $dato["fecha"]. "</td>";
echo "<td>" . $dato["clasificacion"]. "</td>";
echo "</tr>";
}     
echo "</table>";
?>

</center>
</body>
</html>

