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

<body background="https://static.vecteezy.com/system/resources/previews/001/986/084/original/light-green-yellow-gradient-blur-backdrop-vector.jpg">

</body>

<body>
    <?php

    $consulta = "SELECT gestactividad.idgestActividad, perfiles.perfil, actividades.nom_actividad FROM ((gestactividad INNER JOIN perfiles ON gestactividad.id_perfil = perfiles.id_perfil) INNER JOIN actividades ON gestactividad.id_actividad = actividades.id_actividad);";
    $resultado = mysqli_query($con, $consulta) or die('Fallo');
    ?>

    <div class="container">
        <center>
            <h3>Listado de Datos</h3>
        </center>
        <!-- Consulta que permite seleccionar Los Datos -->

        <div id="apDiv1">
            <center>
                <table align="left" width="429" border="0">
                    <tr>
                        <form class="form">
                            <input name="txtbuscar" type="text" class="form-control" title="Ingresar el Nombre o ID." size="40" placeholder="Ingresar el Nombre o ID">
                            <input type="submit" value="Buscar">
                        </form>
                    </tr>
                </table>
            </center>
        </div>

        <!-- Consulta que permite seleccionar Los Datos -->
        <?php
        $buscar = isset($_GET['txtbuscar']) ? $_GET['txtbuscar'] : '';
        if ($buscar != null) {
            $consulta = "SELECT * FROM $bd.gestactividad WHERE idgestActividad LIKE" . "'%" . $buscar . "%'";

            $resultado = mysqli_query($con, $consulta) or die('Fallo en la conexion');
        } else {
        }
        ?>
        <center>
            <div id="apDiv2">
                <br><a href="PrivilegiosReg.php" target="principal" class="btn btn-warning btn-sm"><input type="button" id="button" value="Agregar" /></a>
            </div>
        </center>
        <center>
            <div class="container">
                <center>
                    <h3>Buscar</h3>
                </center>
                <table>
                    <tr>
                        <th class="text-center">
                            <center>
                                <FONT SIZE=4>Codigo Actividad</FONT>
                            </center>
                        </th>
                        <th class="text-center">
                            <center>
                                <FONT SIZE=4>Perfil</FONT>
                            </center>
                        </th>
                        <th class="text-center">
                            <center>
                                <FONT SIZE=4>Actividad</FONT>
                            </center>
                        </th>

                    </tr>
                    <?php
                    while ($fila = mysqli_fetch_array($resultado)) {
                    ?>
                        <tr>

                            <td>
                                <center>
                                    <FONT SIZE=3><?php echo $fila['idgestActividad']; ?></FONT>
                                </center>
                            </td>
                            <td class="text-center">
                                <center>
                                    <FONT SIZE=3><?php echo $fila['perfil']; ?></FONT>
                                </center>
                            </td>
                            <td class="text-center">
                                <center>
                                    <FONT SIZE=3><?php echo $fila['nom_actividad']; ?></FONT>
                                </center>
                            </td>
                            <td class="text-center">
                                <a href="DelPrivilegio.php?idgestActividad=<?php echo $fila['idgestActividad']; ?>" onclick="return ConfirmDelete()"> <input type="button" id="button" value="Eliminar"></a>
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
        </center>
</body>

</html