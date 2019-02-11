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
$c=$_POST["i_cod"];
$t=$_POST["i_tit"];
$d=$_POST["i_date"];
$cl=$_POST["i_clas"];

$query="insert into invitados values('','$c','$t','$d','$cl')"; // inserta el usuario y la clave.
$dato=mysql_query($query,$con); //insetar en la tabla 
if(!$dato) { 
echo "no se inserto el usuario";

}
else{
echo "Se agrego el Libro correctamente";
}
echo "<br> <a href='ver_bibli.php'> Volver </a>";
?>