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
<h2>Usuarios</h2>
<?php
include ("menu_usu.html");
?>




<?php
$id=$_GET['id'];
$query="select * from usuario where id_usuario=" . $id;
$resultado=mysql_query($query, $con);
$dato=mysql_fetch_object($resultado);
?>

<form action="editar_dato1.php" method="post">
<input type="hidden" name="id_usuario" value="<?php echo $id; ?>" />
Su Nombre es: <input type="text" name="nom_n" value="<?php echo $dato->Nombre; ?>"  /> <br>
Su Usuario es: <input type="text" name="nom_u" value="<?php echo $dato->usuario; ?>"  /> <br>
Su Clave es: <input type="text" name="clave_2" value="<?php echo $dato->clave; ?>"  /> <br>
<input type="submit" value="Actualizar" /> 
</form>

	