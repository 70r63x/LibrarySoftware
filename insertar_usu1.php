<?php
session_start();
?>
<?php
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

<?php
$n=$_POST["i_nom"];
$v=$_POST["i_usu"];
$c=$_POST["i_clave"];

$query="insert into usuario values('','$n','$v','$c')"; // inserta el usuario y la clave.
$dato=mysql_query($query,$con); //insetar en la tabla 
if(!$dato) { 
echo "no se inserto el usuario";

}
else{
echo "Se agrego el usuario correctamente";
}
echo "<br> <a href='ver_usu.php'> Volver </a>";
?>