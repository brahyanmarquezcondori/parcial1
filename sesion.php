<?php
// Estableciendo la conexion a la base de datos
include("conf/conexion.php");//Contiene de conexion a la base de datos
 
session_start();// Iniciando Sesion
// Guardando la sesion
$user_check=$_SESSION['login_user_sys'];
// SQL Query para completar la informacion del usuario
$ses_sql=mysqli_query($conn, "select ci, clave, img, fondo from usuario where ci='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_ci =$row['ci'];
$login_clave =$row['clave'];
$fperfil=$row['img'];
$color=$row['fondo'];
$_SESSION['color_fondo'] = $color;
//cambiar color de fondo
if(!empty($_GET['color_fondo'])){
 
	switch($_GET['color_fondo']){
        case 'defecto': $color = '#517BF4'; break;
		case 'blanco': $color = '#ffffff'; break;
		case 'negro': $color = '#000000'; break;
		case 'rojo': $color = '#FF0000'; break;
		case 'verde': $color = '#00FF00'; break;
		case 'azul': $color = '#0000FF'; break;
		case 'amarillo': $color = '#FFFF00'; break;
		case 'morado': $color = '#800080'; break;
		// Color por defecto..
		case 'no': default: $color = '#fff'; break;
	}
 
	$_SESSION['color_fondo'] = $color;
}
//actualizar color fondo
$sql2 = "UPDATE usuario 
SET fondo='".$color."'
where ci='$user_check'";
mysqli_query($conn,$sql2);

if(!empty($_GET['perfil'])){
 
	switch($_GET['perfil']){
        case 'perfilgeneral': $fperfil = 'perfilgeneral'; break;
        case 'perfil1': $fperfil = 'perfil1'; break;
        case 'perfil2': $fperfil = 'perfil2'; break;
        case 'perfil3': $fperfil = 'perfil3'; break;
		
		// Color por defecto..
		case 'no': default: $fperfil = 'perfilgeneral'; break;
	}
 
	$_SESSION['perfil'] = $fperfil;
}
//actualizar perfil
$sql1 = "UPDATE usuario 
SET img='".$fperfil."'
where ci='$user_check'";
mysqli_query($conn,$sql1);
//tabla consulta por departamentos aprobados con mas de 50
$sql2 = "SELECT 
sum(CASE WHEN residencia='01' THEN 1 else 0 end) 'CHUQUISACA',
sum(CASE WHEN residencia='02' THEN 1 else 0 end) 'LA PAZ',
sum(CASE WHEN residencia='03' THEN 1 else 0 end) 'COCHABAMBA',
sum(CASE WHEN residencia='04' THEN 1 else 0 end) 'ORURO',
sum(CASE WHEN residencia='05' THEN 1 else 0 end) 'POTOSI',
sum(CASE WHEN residencia='06' THEN 1 else 0 end) 'TARIJA',
sum(CASE WHEN residencia='07' THEN 1 else 0 end) 'SANTA CRUZ',
sum(CASE WHEN residencia='08' THEN 1 else 0 end) 'BENI',
sum(CASE WHEN residencia='09' THEN 1 else 0 end) 'PANDO' 
from identificador i,notas n 
where n.ci=i.ci and n.nota>50";
$resultado = mysqli_query($conn,$sql2);



?>