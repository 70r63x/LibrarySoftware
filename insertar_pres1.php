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
$c=$_POST["i_c"];
$n=$_POST["i_n"];
$l=$_POST["i_l"];
$f=$_POST["i_f"];
$g=$_POST["i_g"];

$query="insert into contenido1 values('','$c','$n','$l','$f','$g')"; // inserta el usuario y la clave.
$dato=mysql_query($query,$con); //insetar en la tabla 
if(!$dato) { 
echo "no se agrego el registro";

}
else{
echo "Se agrego el resgistro correctamente";
}
echo "<br> <a href='ver_pres.php'> Volver </a>";
?>