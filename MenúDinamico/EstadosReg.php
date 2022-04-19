<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" type="text/css" href="css/estilos2.css"> -->
  <!-- <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
  <title>Registro</title>
</head>

<body background="https://fondosmil.com/fondo/36830.jpg"></body>

<body>
  <form method="post" action="EstadoCre.php" class="envio">
    <center>
      <section class="form-register">
        <h1>Estado del Usuario</h1>
        <input class="controls" type="text" name="nombre" id="nombre" placeholder="Estado del paciente" required><br><br>
        <input class="controls" type="text" name="descripcion" id="descripcion" placeholder="Descripcion Caso" required><br><br>
        <input class="controls" type="text" name="datos_id" id="datos_id" placeholder="ID Usuario" required><br><br>
        <input class="controls" type="text" name="perfiles_id_perfil" id="perfiles_id_perfil" placeholder="ID Perfil" required><br><br>
        <input class="botons" type="submit" value="Enviar"><br>
        <b>
          <br><a href="Inicio.php" target="principal"><input type="button" id="button" value="Regresar" /></a><br>
        </b>
      </section>
    </center>
  </form>
</body>

</html>