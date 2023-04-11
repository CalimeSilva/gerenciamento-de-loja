<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
</head>

<body>
  <div class="col-md-3"></div>
  <div class="col-md-6 well">
    <hr style="border-top:1px dotted #ccc;" />
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <form action="model/cadastro_query.php" method="POST">
        <h4 class="text-success">Registre-se aqui...</h4>
        <hr style="border-top:1px groovy #000;">

        <div class="form-group">
          <label>Username</label>
          <input type="text" placeholder="Username" class="form-control" name="username" />
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" placeholder="password" class="form-control" name="password" />
        </div>
        <br />
        <div class="form-group">
          <button class="btn btn-primary form-control" name="registro">Registrar</button>
        </div>
        <a href="index.php">Login</a>
      </form>
    </div>
  </div>
</body>

</html>