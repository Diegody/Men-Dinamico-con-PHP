<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" type="text/css" href="css/estilos2.css"> -->
  <!-- <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
  <title>Formulario</title>
</head>
<body background="https://www.xtrafondos.com/descargar.php?id=7936&resolucion=2560x1440"></body>
<body>
  <center>
    <form method="post" action="PrivilegioCre.php" class="envio">
      <section class="form-register">
        <h1>Control Privilegios</h1>
        <input class="controls" type="text" name="idgestActividad" id="idgestActividad" placeholder="Codigo" required><br><br>
        <input class="controls" type="text" name="id_perfil" id="id_perfil" placeholder="ID Perfil" required><br><br>
        <input class="controls" type="text" name="id_actividad" id="id_actividad" placeholder="ID Actividad"><br><br>
        <input class="botons" type="submit" value="Enviar">
        <b>
          <br><br><a href="Inicio.php" target="principal"><input type="button" id="button" value="Regresar" /></a><br>
        </b>
      </section>
    </form>
  </center>
</body>

</html>