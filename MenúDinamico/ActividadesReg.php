<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" type="text/css" href="css/estilos2.css"> -->
  <!-- <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
  <title>Actividades</title>
</head>
<body background="https://fondosmil.com/fondo/516.png"></body>
<body>
  <center>
  <form method="post" action="ActividadCre.php" class="envio">
    <section class="form-register">
      <h1>Actividades</h1>
      <input class="controls" type="text" name="id_actividad" id="id_actividad" placeholder="Codigo" required><br><br>
      <input class="controls" type="text" name="nom_actividad" id="nom_actividad" placeholder="Nombre Actividad" required><br><br>
      <input class="controls" type="text" name="enlace" id="enlace" placeholder="Enlace (Opcional)"><br><br>
      <input class="botons" type="submit" value="Enviar"><br>
      <b>
        <br><a href="Inicio.php" target="principal"><input type="button" id="button" value="Regresar" /></a><br>
      </b>
    </section>
  </form>
  </center>
</body>
</html>