<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" type="text/css" href="css/estilos2.css"> -->
  <!-- <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
  <title>Registro Paciente</title>
</head>

<body background="https://static.vecteezy.com/system/resources/previews/002/176/452/non_2x/blurred-large-panoramic-summer-background-multicolored-gradient-vector.jpg"></body>

<body>
  <form method="post" action="PersonaCre.php" class="envio">
    <section class="form-register">
      <center>
        <h1>Registro del Paciente</h1><br>
        <input class="controls" type="text" name="id" id="id" placeholder="Código" required><br><br>
        <input class="controls" type="text" name="usuario" id="usuario" placeholder="Usuario" required><br><br>
        <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre" required><br><br>
        <input class="controls" type="password" name="clave" id="clave" placeholder="Contraseña" required><br><br>
        <input class="controls" type="text" hidden=true name="idperfil" id="idperfil" value=2 required>
        <input class="botons" type="submit" value="Registrar">
        <b>
          <br><br><a href="Principal.php" target="principal"><input type="button" id="button" value="Regresar" /></a><br>
        </b>
      </center>
    </section>
  </form>
</body>

</html>