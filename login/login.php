<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>Login</title>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="register-form" method="post" action="../controlador/consulta.php">
      <h1>Ingresa</h1>
      <input type="text" placeholder="Aquí va el email" name="email"/>
      <input type="password" placeholder="Aquí la contraseña" name="contrasena"/>
      <button>Ingresar</button>
      <p class="message">No te has registrauh ? 🤨 <a href="../register/register.php">Regitrate😎</a></p>
    </form>
  </div>
</div>
</body>
</html>