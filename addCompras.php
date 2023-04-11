<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nova Compras</title>
</head>

<body>
  <div class="title">
    <h1>Nova Compra</h1>
  </div>
  <div class="form">
    <form action="./model/comprasAdd_query.php" method="post">
      <label for="nome">Nome</label>
      <input type="text" name="cod" placeholder="Ex:AO11">
      <label for="data">Data</label>
      <input type="date" name="data">
      <label for="qunt">Quantidade:</label>
      <input type="number" name="qnt" placeholder="Ex: 10">
      <label for="valor">Valor:</label>
      <input type="number" name="valor" placeholder="Ex: 0000">
      <label for="empresa">Empresa:</label>
      <input type="text" name="empresa" placeholder="Ex: SoftWorn">

      <button name="cadastro">Cadastrar</button>
    </form>
  </div>
</body>

</html>