<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Despesas</title>
</head>

<body>
  <div class="despesas_list">
    <table>
      <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Data</th>
        <th>Opções</th>
      </tr>
      <?php
      include_once('model/conn.php');
      include_once('model/DAO/despesaDao.php');

      $c = new conexao();
      $conn = $c->conetado();

      $seleciona = new despesa_Dao();
      $stmt = $seleciona->listar_despesas($conn);

      if ($stmt == null) {
        echo "<tr><td>-</td><td>-</td><td>-</td><td>-</td></tr>";
        //caso não tenha nenhuvaziam valor na base de dados ele vai retornar uma tabela 
        echo "Existe um pequeno contra tempo na Base de Dados, Por favor contacte o Programador!";
      } else {
        foreach ($stmt as $despesa) {
          echo "<tr>
          <td>", $despesa->tipoDespesa, '</td>
          <td>Kz ', number_format($despesa->valor, 0, ' ', '.'), "</td>
          <td>", date('d/m/Y', strtotime($despesa->data)), "</td>
          <td><a href='model/editarDespesa.php?id=", $despesa->id, "' title='Editar'>
            <img src='img/edit_icon.png' alt='editar'>
          </a>
          <a href='pdo/delete_despesa.php?id=", $despesa->id, "' title='Deletar'>
              <img src='img/delete_icon.png' alt='delete'>
          </a></td>
          </tr>";
        }
      }


      ?>
    </table>
  </div>
</body>

</html>