
<html>
<head>
<?php
include('iniciar.php'); // Includes Login
 
if(isset($_SESSION['login_user_sys'])){
header("location: pagina.php");
}
?>
<title>Sistema Academico</title>
<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<style>

</style>
<body>

<h3 align="center">Sistema Academico 2020</h3>


<div class="header">
<img src="img/perfilgeneral.png" alt="Imagen de perfil" style="width:100px;height:100px;">
</div>
<br>
<div>
    <table style="width:100%">
    <tr>
        <td style="width:50%;padding:30px"> 
    <form action="#" method="post">
    <label>Usuario </label><br>
    <input type="text" name="usu" placeholder="Nombre de Usuario"><br>

    <label>Contraseña </label><br>
    <input type="password" name="contra" placeholder="Contraseña" style="  width: 50%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;"><br>
  
    <input name="submit" type="submit" value="Ingresar"><br>
    <span style="color:red;"><?php echo $error; ?></span>
  </form></td>
  
  <td></td>
    </tr>    
    </table>
  
</div>

</body>
</html>