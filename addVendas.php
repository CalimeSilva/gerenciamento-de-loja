<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nova Venda</title>
</head>

<body>
  <div class="form">
    <form action="./model/vendasAdd_query.php" method="post">
      <label for="dat">Data:</label>
      <input type="date" name="data">

      <label for="value">Valor:</label>
      <input type="number" name="valor" placeholder="Ex: 1000">
      <button name="cadastro">Cadastrar</button>
    </form>
</body>

</html>