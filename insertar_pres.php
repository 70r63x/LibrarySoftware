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
<h2>Prestamos</h2>
<?php
include ("menu_pres.html");
?>
<br>
<form action="insertar_pres1.php" method="post">
<input type="text" name="i_c" placeholder="Cod. Prestamo" />
<input type="text" name="i_n" placeholder="Nombre de Estudiante" />
<input type="text" name="i_l" placeholder="Libro" />
<input type="text" name="i_f" placeholder="YYY-MM-DD" />
<input type="text" name="i_g" placeholder="Grado" />
<input type="submit" value="Registrar" /> 
</form>
</center>
</body>
</html>