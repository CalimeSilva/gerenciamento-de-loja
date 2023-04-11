<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="css/login.css" type="text/css" rel="stylesheet" />
  <title>Sistema de Gestão de Estoque SoftSilva_0.1</title>
</head>

<body>
  <form action="model/login_query.php" method="POST">
    <input type="text" name="user" placeholder="Username" id="" />
    <input type="password" name="password" placeholder="Password" id="" />
    <br>
    <button name="login">Login</button>
    <a href="cadastro.php">Cadastrar</a>
  </form>
</body>

</html>