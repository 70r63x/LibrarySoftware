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
		Instituci�n Educativa Combia Biblioteca

	</title>
</head>
<body>

<center>
<h2>Prestamos</h2>
<?php
include ("menu_pres.html");
?>
</center>
</body>
</html>