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
$query="select * from contenido1";

$resultado=mysql_query("delete from contenido1 where id_pres= $id", $con);

echo "Se elimino el Prestamo correctamente";

echo "<br> <a href='ver_pres.php'> Volver </a>";

?>
