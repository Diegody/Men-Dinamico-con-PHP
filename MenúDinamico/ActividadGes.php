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

<body background="https://www.wallpapertip.com/wmimgs/80-807358_fondos-degradados-colores-claros.jpg"></body>

<body>
    <?php

    $consulta = "SELECT * FROM $bd.actividades";
    $resultado = mysqli_query($con, $consulta) or die('Fallo');
    ?>

    <center>
        <div class="container">
            <h2>Listado de Datos</h3>
                <!-- Consulta que permite seleccionar Los Datos -->
                <center>
                    <table align="left" width="429" border="0">
                        <tr>
                            <form class="form">
                                <input name="txtbuscar" type="text" class="form-control" title="Ingresar el Nombre o ID." size="30" placeholder="Nombre o ID">
                                <input type="submit" value="Buscar">
                            </form>
                        </tr>
                    </table>
                </center>

                <!-- Consulta que permite seleccionar Los Datos -->
                <?php
                $buscar = isset($_GET['txtbuscar']) ? $_GET['txtbuscar'] : '';
                if ($buscar != null) {
                    $consulta = "SELECT * FROM $bd.actividades WHERE id_actividad LIKE " . "'%" . $buscar . "%' OR nom_actividad
        LIKE" . "'%" . $buscar . "%'";

                    $resultado = mysqli_query($con, $consulta) or die('Fallo en la conexion');
                } else {
                }
                ?>

                <p><br><a href="ActividadesReg.php" target="principal"><input type="button" id="button" value="Agregar" /></a><br></p>
                

                <center>
                    <div class="container">
                        <center>
                            <h2>Buscar Actividad</h2>
                        </center>
                        <table>
                            <tr>
                                <th class="text-center">
                                    <FONT SIZE=4>ID</FONT>
                                </th>
                                <th class="text-center">
                                    <FONT SIZE=4>Nombre</FONT>
                                </th>
                                <th class="text-center">
                                    <FONT SIZE=4>URL</FONT>
                                </th>
                            </tr>
                            <?php
                            while ($fila = mysqli_fetch_array($resultado)) {
                            ?>
                                <tr>
                                    <td>
                                        <FONT SIZE=3><?php echo $fila['id_actividad']; ?></FONT>
                                    </td>
                                    <td class="text-center">
                                        <FONT SIZE=3><?php echo $fila['nom_actividad']; ?></FONT>
                                    </td>
                                    <td class="text-center">
                                        <FONT SIZE=3><?php echo $fila['enlace']; ?></FONT>
                                    </td>
                                    <td class="text-center">
                                        <a href="ActividadDel.php?id_actividad=<?php echo $fila['id_actividad']; ?>" onclick="return ConfirmDelete()"> <input type="button" id="button" value="Eliminar"></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            mysqli_close($con);
                            ?>
                        </table>
                        <b>
                            <br><a href="consultaMenu1.php" target="principal"><input type="button" id="button" value="Regresar" /></a><br>
                        </b>
                    </div>
                </center>
    </center>
</body>

</html