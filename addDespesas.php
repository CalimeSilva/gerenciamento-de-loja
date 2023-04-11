<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/expense_forms.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link rel="icon" href="img/managment_icon.svg">
  <title>Nova Despesa</title>
</head>

<body>

  <div class="title">
    <h1>Nova Despesa</h1>
  </div>

  <div class="form">
    <form action="./model/despesaAdd_query.php" method="post">
      <label for="name">Tipo de despesa:</label>
      <input type="text" name="nome" placeholder="Ex: Aluguel, Luz, Água">

      <label for="value">Valor:</label>
      <input type="number" name="valor" placeholder="Ex: 1000">

      <label for="date">Data:</label>
      <input type="date" name="date">

      <button name="cadastro">Cadastrar</button>
    </form>
  </div>
</body>

</html>