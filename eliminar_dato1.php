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
$query="select * from invitados";

$resultado=mysql_query("delete from invitados where id_libro= $id", $con);

echo "Se elimino el Libro correctamente";

echo "<br> <a href='ver_bibli.php'> Volver </a>";

?>
