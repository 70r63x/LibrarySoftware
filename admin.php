<?php
session_start();
if(isset($_SESSION['restringir'])==1){ 
$link_address = 'cerrar.php';
echo "<table width=30% border=0>
<tr valign=top>
<td>Esta conectado / Bienvenido";
echo "</td><td><a href='".$link_address."'>Cerrar Sesion</a></td></tr></table>";
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
<link rel="stylesheet" type="text/css" href="css/styles.css" />
 </head>
<body>
<center>
<img src="img/logo2.jpg" class="tam2"><h1 style="font-size:25px">Centro de Gestion Bibliotecario Institucion Educativa Combia</h1>
<nav>
		
<ul class="principal">
			
<li><a href="biblioteca.php" target="frame1">Biblioteca</a></li>
					
<li><a href="prestamos.php" target="frame1">Prestamos</a></li>
			
<li><a href="usuarios.php" target="frame1">Usuarios</a></li>
		
</ul>
	
</nav>

<div class="contenido">
	     
<section>

<center>		
<iframe src="bienvenida.html" frameborder="0" width="100%" height="50%" scrolling="no" name="frame1"></iframe>
	    
</center>
</section>
	    	
</div>
		
</center>
<center>
<table class="footer">
 <tr>
  <td><table class="tab1"><tr><td><img src="img/colombia.png" class="tam"></td><td><img src="img/mintic.png" class="tam"></td><td><img src="img/presidencia.png" class="tam"></td><td><img src="img/talentodigital.png" class="tam"></td></tr></table></td>
 </tr>
 <tr>
  <td><span>@2016 todos los derechos reservados<div class="uno"></span></td>
 </tr>
</table>
</center>
</body>
</html>