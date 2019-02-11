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
<h2>Usuarios</h2>
<?php
include ("menu_usu.html");
?>
<br>
<?php
$query="select * from usuario";//selecciona todos los datos de la tabla de usuarios 
$resultado=mysql_query($query,$con);//ejecuta la consulta
echo "<table border='1'>
	<tr>
		<td>Id Usuario</td>
		<td>Nombre</td>
		<td>Usuario</td>
		<td>Clave</td>
	</tr>";
while ($dato=mysql_fetch_array($resultado)){
echo "<tr>";
echo "<td>" . $dato["id_usuario"]. "</td>";
echo "<td>" . $dato["Nombre"]. "</td>";
echo "<td>" . $dato["usuario"]. "</td>";
echo "<td>" . $dato["clave"]. "</td>";
echo "</tr>";
}     
echo "</table>";
?>

</center>
</body>
</html>

