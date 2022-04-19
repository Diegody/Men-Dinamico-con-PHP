<?php
include_once('Conexion.php');
$con = mysqli_connect($host, $usuario, $clave, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="gb18030">
    <!-- <link rel="stylesheet" type="text/css" href="css/estiloTablas.css"> -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    <title>Lista de Datos</title>
</head>

<body background="https://static.vecteezy.com/system/resources/previews/002/039/435/large_2x/light-green-red-gradient-blur-backdrop-vector.jpg">
</body>

<body>
    <?php

    $consulta = "SELECT * FROM $bd.datos";
    $resultado = mysqli_query($con, $consulta) or die('Fallo');
    ?>

    <div class="container">
        <center>
            <h3>Listado de Datos</h3>
        </center>
        <!-- Consulta que permite seleccionar Los Datos -->
        <center>
            <div id="apDiv1">

                <table align="left" width="429" border="0">
                    <tr>

                        <form class="form">
                            <input name="txtbuscar" type="text" class="form-control" title="Ingresar el Nombre o ID." size="30" placeholder="Nombre o ID">
                            <input type="submit" value="Buscar">
                        </form </td>
                    </tr>
                </table>

            </div>
        </center>

        <!-- Consulta que permite seleccionar Los Datos -->
        <?php
        $buscar = isset($_GET['txtbuscar']) ? $_GET['txtbuscar'] : '';
        if ($buscar != null) {

            $consulta = "SELECT * FROM $bd.datos WHERE id LIKE " . "'%" . $buscar . "%' OR nombre
        LIKE" . "'%" . $buscar . "%'";

            $resultado = mysqli_query($con, $consulta) or die('Fallo en la conexion');
        } else {
        }
        ?>
        <br>
        <center>
            <div class="container">
                <table>
                    <tr>
                        <th class="text-center">
                            <FONT SIZE=4>ID</FONT>
                        </th>
                        <th class="text-center">
                            <FONT SIZE=4>Nombres</FONT>
                        </th>
                        <th class="text-center">
                            <FONT SIZE=4>usuario</FONT>
                        </th>
                        <th class="text-center">
                            <FONT SIZE=4>ID Perfil</FONT>
                    </tr>
                    <?php
                    while ($fila = mysqli_fetch_array($resultado)) {
                    ?>
                        <tr>
                            <td>
                                <FONT SIZE=3>
                                    <center><?php echo $fila['id']; ?></center>
                                </FONT>
                            </td>
                            <td class="text-center">
                                <FONT SIZE=3>
                                    <center><?php echo $fila['nombre']; ?></center>
                                </FONT>
                            </td>
                            <td class="text-center">
                                <FONT SIZE=3>
                                    <center><?php echo $fila['usuario']; ?></center>
                                </FONT>
                            </td>
                            <td class="text-center">
                                <FONT SIZE=3>
                                    <center><?php echo $fila['id_perfil']; ?></center>
                                </FONT>
                            </td>
                            <td class="text-center">
                                <a href="PersonaUpt.php?id=<?php echo $fila['id']; ?>"><input type="button" id="button" value="Modificar"></a>
                                <a href="PersonaDel.php?id=<?php echo $fila['id']; ?>" onclick="return ConfirmDelete()"><input type="button" id="button" value="Eliminar"></a>
                            </td>
                        </tr>
                    <?php
                    }
                    mysqli_close($con);
                    ?>
                </table>
                <b>
                    <br><a href="Inicio.php" target="principal"><input type="button" id="button" value="Regresar" /></a><br><br>
                </b>
            </div>
        </center>

</body>

</html