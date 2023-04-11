<?php
class conexao
{
  protected $conn;
  function conetado()
  {
    $this->conn = new PDO('mysql:host=localhost;dbname=gerenciamentoloja', 'root', '');
    return $this->conn;
  }
}
