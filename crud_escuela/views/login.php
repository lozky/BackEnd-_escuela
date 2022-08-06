<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_escuela</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="bg-img">
  <form action="../controlator/login_acceso.php" method="POST" class="container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Ingresa tu Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Ingresa tu Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <p>Primera vez? <a href="registrate.html">Registrate Aqui</a></p>
  </form>
</div>
</body>
</html>