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

<body>
  <center>
    <form method="post" action="ActividadCre.php" class="envio">
      <section class="form-register">
        <h4>Formulario de actividades</h4>
        <input class="controls" type="text" name="id_perfil" id="id_perfil" placeholder="Códigp Perfil" required>
        <input class="controls" type="text" name="perfil" id="perfil" placeholder="Nombre Perfil" required>
        <input class="botons" type="submit" value="Enviar"><br>
        <b>
          <br><a href="Inicio.php" target="principal"><input type="button" id="button" value="Regresar" /></a><br>
        </b>
      </section>
    </form>
  </center>
</body>

</html>