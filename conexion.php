<?php
	function conectar() {
		$user="root";
		$pass="";
		$server="localhost";
		$db="s-b_1.0";
		$con=mysql_connect($server, $user, $pass) or die ("Error al conectar".mysql_error());
		mysql_select_db($db,$con);
		return $con;
}
		






?>