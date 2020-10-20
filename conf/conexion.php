
<?php
/*Conexion base de datos con mysql*/
$conn = mysqli_connect("localhost","ejemplo","123456");
mysqli_select_db($conn, "academico");
if(!$conn){
    die("imposible conectarse: ".mysqli_error($conn));
}
if (@mysqli_connect_errno()) {
    die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}
?>