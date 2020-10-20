<html>

<head>
<?php
include('sesion.php');
?>
    <title>Sistema Academico</title>
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    <style type="text/css">
    <?php
    if( !empty($_SESSION['color_fondo'])) {
        echo 'body {background:'.$_SESSION['color_fondo'].';}';
    }
    ?>
    </style>
</head>

<body>

    <h3 align="center">Sistema Academico 2020</h3>


    <div class="header">
        <img src="img/<?php echo $fperfil; ?>.png" alt="Imagen de perfil" style="width:100px;height:100px;">
    </div>
    <br>
    <div>
        <table style="width:100%">
            <tr>
                <td style="width:50%;padding:30px">

                    <label class="titulos">Bienvenido :</label><br>
                    <label><?php echo $login_ci; ?></label><br>
                    <hr>


                    <label class="titulos">Su Contraseña es :</label><br>
                    <label><?php echo $login_clave; ?></label><br>
                    <hr>

                    <label class="titulos">Cambiar color de fondo</label><br>
                    <form action="" method="GET">
                        <select name="color_fondo">
                            <option value="no" selected disabled>Selecciona un color.</option>
                            <option value="defecto">Por defecto</option>
                            <option value="blanco">Blanco</option>
                            <option value="negro">Negro</option>
                            <option value="rojo">Rojo</option>
                            <option value="verde">Verde</option>
                            <option value="azul">Azul</option>
                            <option value="amarillo">Amarillo</option>
                            <option value="morado">Morado</option>
                        </select>
                        <input type="submit" value="Cambiar color" />
                    </form>

                    <hr>
                    <label class="titulos">Cambiar Foto de perfil</label><br>
                    <form action="" method="GET">
                        <select name="perfil">
                            <option value="no" selected disabled>Selecciona un Perfil.</option>
                            <option value="perfilgeneral">Por defecto</option>
                            <option value="perfil1">Perfil-1</option>
                            <option value="perfil2">Perfil-2</option>
                            <option value="perfil3">Perfil-3</option>
                        </select>
                        <input type="submit" value="Cambiar foto de perfil" />
                    </form>
                    <hr>
                    <a href="cerrarsesion.php">Cerrar sesion</a>
                </td>

                <td align="center">
                    <?php //printf($sql2);?>
                    <table border="1" style="font-size: 12px;">
                        <tr align="center">
                            <td>CHUQUISACA</td>
                            <td>LA PAZ</td>
                            <td>COCHABAMBA</td>
                            <td>ORURO</td>
                            <td>POTOSI</td>
                            <td>TARIJA</td>
                            <td>SANTA CRUZ</td>
                            <td>BENI</td>
                            <td>PANDO</td>
                        </tr>
                        <?php
while ($col = mysqli_fetch_array($resultado))
{
    echo "<tr align='center'>";
    echo "<td>".$col[0]."</td>";
    echo "<td>".$col[1]."</td>";
    echo "<td>".$col[2]."</td>";
    echo "<td>".$col[3]."</td>";
    echo "<td>".$col[4]."</td>";
    echo "<td>".$col[5]."</td>";
    echo "<td>".$col[6]."</td>";
    echo "<td>".$col[7]."</td>";
    echo "<td>".$col[8]."</td>";
    echo "</tr>";
}
?>
                    </table>

                </td>
            </tr>
        </table>

    </div>

</body>

</html>