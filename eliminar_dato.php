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

<?php
$id=$_GET['id'];
$query="select * from usuario";

$resultado=mysql_query("delete from usuario where id_usuario= $id", $con);

echo "Se elimino el usuario correctamente";

echo "<br> <a href='ver_usu.php'> Volver </a>";

?>
