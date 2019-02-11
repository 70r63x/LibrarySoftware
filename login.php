<?php
session_start();



?>
<?php
include("conexion.php");
$con=conectar();

$nusuario=$_POST["usuario"];
$nclave=$_POST["clave"];

$_SESSION['sessionusuario']=$nusuario;
echo $_SESSION['sessionusuario'];

$usuarioprincipal=mysql_query("SELECT * FROM usuario where usuario='".$nusuario."' and clave='".$nclave."'" , $con);

if($row=mysql_fetch_array($usuarioprincipal)){
  $_SESSION['restringir']=1;

echo "<script languaje='javascript'>window.location='admin.php'</script>";
}
else{
  $_SESSION['restringir']=0;
echo "<script languaje='javascript'>window.location='index.php'</script>";
}
?>