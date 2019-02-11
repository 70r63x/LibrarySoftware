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
<h2>Biblioteca</h2>
<?php
include ("menu_bibli.html");
?>
<br>
<form action="insertar_bibli1.php" method="post">
<input type="text" name="i_cod" placeholder="Cod. Libro" />
<input type="text" name="i_tit" placeholder="Titulo" />
<input type="text" name="i_date" placeholder="YYYY-MM-DD" />
<input type="text" name="i_clas" placeholder="Clasificacion" />
<input type="submit" value="Registrar" /> 
</form>
</center>
</body>
</html>