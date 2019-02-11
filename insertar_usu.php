<?php
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
<title>
		Institución Educativa Combia Biblioteca

	</title>
</head>
<body>

<center>
<h2>Usuarios</h2>
<?php
include ("menu_usu.html");
?>
<br>
<form action="insertar_usu1.php" method="post">
<input type="text" name="i_nom" placeholder="Nombre" />
<input type="text" name="i_usu" placeholder="Usuario" />
<input type="password" name="i_clave" placeholder="Contraseña" />
<input type="submit" value="registrar" /> 
</form>
</center>
</body>
</html>