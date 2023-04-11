<?php
class despesa_Dao
{
  public function inserirDados($despesa, $conexao)
  {
    include_once("classes/despesasClass.php");
    try {
      $stmt = $conexao->prepare("INSERT INTO despesas(tipoDespesa, valor, data) VALUES (:tipoDespesa, :valor,:data)");
      $stmt->bindValue(":tipoDespesa", $despesa->getNome());
      $stmt->bindValue(":valor", $despesa->getValor());
      $stmt->bindValue(":data", $despesa->getData());

      $stmt->execute();

      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();

      return false;
    }
  }
  public function listar_Despesas($conexao)
  {
    try {
      $stmt = $conexao->query("SELECT * FROM despesas ORDER BY data DESC LIMIT 100")->fetchAll(PDO::FETCH_OBJ);
      return $stmt;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  public function editar_Despesas_info($id, $conexao)
  {
    try {
      $stmt = $conexao->query("SELECT * FROM despesas WHERE id = '$id'")->fetchAll(PDO::FETCH_OBJ);

      return $stmt;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  public function editar_Despesas($id, $despesa, $conexao)
  {
    include_once("classes/despesasClass.php");

    try {
      $stmt = $conexao->prepare("UPDATE despesas SET tipoDespesa = ?, valor = ?, data = ? WHERE id = ?");

      $stmt->bindValue(1, $despesa->getNome());
      $stmt->bindValue(2, $despesa->getValor());
      $stmt->bindValue(3, $despesa->getData());
      $stmt->bindValue(4, $id);

      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();

      return false;
    }
  }
}
