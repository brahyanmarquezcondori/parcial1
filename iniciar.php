<?php
session_start(); // Iniciando sesion
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['submit'])) {
if (empty($_POST['usu']) || empty($_POST['contra'])) {
$error = "El usuario o contraseña son invalidos";
}
else
{
// Define $usuario y $clave o contraseña
$usuario=$_POST['usu'];
$clave=$_POST['contra'];
// Estableciendo la conexion a la base de datos
include("conf/conexion.php");//Contiene de conexion a la base de datos
 
$sql = "SELECT ci, clave FROM usuario WHERE ci = '" . $usuario . "' and clave='".$clave."';";

$query=mysqli_query($conn,$sql);
$counter=mysqli_num_rows($query);
if ($counter==1){
		$_SESSION['login_user_sys']=$usuario; // Iniciando la sesion
		header("location: pagina.php"); // Redireccionando a la pagina profile.php
	
	
} else {
$error = "El cusuario o la contraseña es inválida.";	
}
}
}
?>