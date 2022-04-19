<?php
//1. Invocar conexión
include_once("Conexion.php");
//2. Crear conexión a la Base de Datos
$con=mysqli_connect($host, $usuario, $clave, $bd) or die('Falló la conexion');
mysqli_set_charset($con,"utf8");
//3. Tomar los datos provenientes de los campos del Formulario

$vid = trim($_POST['id']);
$vnombre = trim($_POST['nombre']);
$vusuario = trim($_POST['usuario']);
$vclave = trim($_POST['clave']);
$vidperfil = trim($_POST['idperfil']);

//4. Insertar los datos en la tabla de la Base de Datos 
$inserta = "INSERT INTO $bd.datos (id, nombre, usuario, clave, id_perfil) VALUES 
('$vid','$vnombre','$vusuario','$vclave','$vidperfil');";
$resultado = mysqli_query($con,$inserta);
//5. Redirecciona la consulta y muestra los datos que contiene la Base de Datos 
//header("location:resultado.php");
//6. Cerrar la conexion 
 mysqli_close($con);
?>
<Script>
    alert("¡Persona Añadida!");
    window.location.href='Principal.php'
</Script>