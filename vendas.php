<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendas</title>
</head>

<body>
  <div class="venda">
    <table>
      <tr>
        <th>Data</th>
        <th>Valor</th>
      </tr>
      <?php
      include_once("model/conn.php");
      include_once("model/DAO/vendasDao.php");

      $c = new conexao();
      $conn = $c->conetado();

      $seleciona = new Vendas_Dao();
      $stmt = $seleciona->listar_venda($conn);

      if ($stmt == null) {
        echo "<tr><td>-</td><td>-</td></tr>";
        echo "Existe um pequeno contra tempo tente mais tarde ou chame o programador web!";
      } else {
        foreach ($stmt as $vendas) {
          echo "<tr>
        <td>", date('d/m/Y', strtotime($vendas->data)), "</td>
        <td>", number_format($vendas->valor), "</td>
        </tr>";
        }
      }
      ?>
    </table>

  </div>
</body>

</html>