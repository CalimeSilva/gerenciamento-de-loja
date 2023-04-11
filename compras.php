<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compras</title>
</head>

<body>
  <table>
    <tr>
      <th>Cod/Nome</th>
      <th>Quantidade</th>
      <th>Preço</th>
      <th>Empresa</th>
      <th>Data</th>
    </tr>

    <?php
    include_once('model/conn.php');
    include_once('model/DAO/comprasDao.php');

    $c = new conexao();
    $conn = $c->conetado();

    $seleciona = new compras_Dao();
    $stmt = $seleciona->listar($conn);

    if ($stmt == null) {
      echo "<tr><td>-</td><td>-</td><td>-</td><td>-</td></tr>";
      echo "Existe um pequeno contra tempo na BD, Por favor contacte o Programador";
    } else {
      foreach ($stmt as $compras) {
        echo "<tr>
        <td>", $compras->cod, "</td>
        <td>", date('d/m/Y', strtotime($compras->data)), "</td>
        <td>", $compras->quantidade, "</td>
        <td>", number_format($compras->valor), "</td>
        <td>", $compras->empresa, "</td>

        <td><a href='model/editarcompras_.php?id=", $compras->id, "'title='Editar'>
          <img src='' alt='editar'>
        </a>
        <a href='model/eliminarCompras.php?id=", $compras->id, "' title='Deletar'>
          <img src='' alt='delete'>
        </a></td> 
        </tr>
        ";
      }
    }
    ?>
  </table>


</body>

</html>