
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- <link rel="stylesheet" type="text/css" href="css/nuevoEstilo.css"> -->
	<!-- <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
	<title>Formulario</title>
</head>
<body background="https://static.vecteezy.com/system/resources/previews/001/973/097/non_2x/light-blue-green-gradient-blur-backdrop-vector.jpg"></body>
<body>
<form method="post" action="PersonaCre.php" class="envio">
<section class="form-register">
  <center>
    <h1>Registro Admin</h1>
    <input class="controls" type="text" name="id" id="id" placeholder="Código" required><br><br>
    <input class="controls" type="text" name="usuario" id="usuario" placeholder="Usuario" required><br><br>
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre" required><br><br>
    <input class="controls" type="password" name="clave" id="clave" placeholder="Contraseña" required><br><br>
    <input class="controls" type="text" hidden=true name="idperfil" id="idperfil" value=1 required><br>
    <input class="botons" type="submit" value="Registrar"><br><br>
    <a href="Inicio.php" target="principal"><input type="button" id="button" value="Regresar" /></a><br>
    </center>
  </section>
</form>
</body>
</html>