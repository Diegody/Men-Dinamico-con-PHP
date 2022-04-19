<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>LogIn</title>
  <!-- <link rel="stylesheet" href="css/estiloInicio.css"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@1,700&display=swap" rel="stylesheet"> -->
</head>

<body background="https://fondosmil.com/fondo/26165.jpg"></body>

<body>

  <div class="login-page">
    <div class="form">
      <center>
        <form class="login-form" method="post" action="AutenticarCre.php">
          <h1>Hospital AppWeb</h1><br>
          <input type="text" name="usuario" placeholder="Nombre de usuario" /><br><br>
          <input type="password" name="clave" placeholder="Contraseña" /><br><br>
          <input type="submit" name="login" id="button" value="Ingresar" />
          <br><br>
          <b>
            <p class="message">¿No se encuentra registrado? <a href="UserReg.php" target="principal"><input type="button" id="button" value="Registrar" /></a></p>
          </b>
        </form>
      </center>
    </div>
  </div>

</body>