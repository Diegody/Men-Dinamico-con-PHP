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

<body background="https://fondosmil.com/fondo/26165.jpg"></body>

<body>
    <?php

    $consulta = "SELECT * FROM $bd.estados";
    $resultado = mysqli_query($con, $consulta) or die('Fallo');
    ?>

    <div class="container">
        <center>
            <h1>Listado de Datos</h1>
        </center>
        <!-- Consulta que permite seleccionar Los Datos -->

        <center>
            <div id="apDiv1">

                <table align="left" width="429" border="0">
                    <tr>
                        <form class="form">
                            <input name="txtbuscar" type="text" class="form-control" title="Ingresar el Nombre o ID." size="40" placeholder="Ingresar el Nombre o ID">
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
            $consulta = "SELECT * FROM $bd.estados and nombre LIKE" . "'%" . $buscar . "%'";
            $resultado = mysqli_query($con, $consulta) or die('Fallo en la conexion');
        } else {
        }
        ?>
        <center>
            <div id="apDiv2">
                <br><a href="EstadosReg.php" target="principal" class="btn btn-warning btn-sm"><input type="button" id="button" value="Agregar" /></a>
            </div>
        </center>

        <div class="container"><br>
            <center>
                <table>
                    <tr>
                        <th class="text-center">
                            <FONT SIZE=4>Nombre</FONT>
                        </th>
                        <th class="text-center">
                            <FONT SIZE=4>Descripción</FONT>
                        </th>
                        <th class="text-center">
                            <FONT SIZE=4>ID Datos</FONT>
                        </th>
                        <th class="text-center">
                            <FONT SIZE=4>ID Perfiles</FONT>
                    </tr>
                    <?php
                    while ($fila = mysqli_fetch_array($resultado)) {
                    ?>
                        <tr>

                            <td>
                                <center>
                                    <FONT SIZE=3><?php echo $fila['nombre']; ?></FONT>
                                </center>
                            </td>
                            <td class="text-center">
                                <center>
                                    <FONT SIZE=3><?php echo $fila['descripcion']; ?></FONT>
                                </center>
                            </td>
                            <td class="text-center">
                                <center>
                                    <FONT SIZE=3><?php echo $fila['datos_id']; ?></FONT>
                                </center>
                            </td>
                            <td class="text-center">
                                <center>
                                    <FONT SIZE=3><?php echo $fila['perfiles_id_perfil']; ?></FONT>
                                </center>
                            </td>
                            <td class="text-center">
                                <a href="EstadoDel.php?nombre=<?php echo $fila['nombre']; ?>" onclick="return ConfirmDelete()"><input type="button" id="button" value="Eliminar"></a>
                            </td>
                        </tr>
                    <?php
                    }
                    mysqli_close($con);
                    ?>
                </table>
                <b>
                    <br><a href="Inicio.php" target="principal"><input type="button" id="button" value="Regresar" /></a><br>
                </b>
        </div>
</body>
</html