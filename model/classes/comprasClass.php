<?php
class compra
{
  private $codNome;
  private $data;
  private $quantidade;
  private $valor;
  private $empresa;

  function getCodNome()
  {
    return $this->codNome;
  }
  function getData()
  {
    return $this->data;
  }
  function getQuantidade()
  {
    return $this->quantidade;
  }
  function getValor()
  {
    return $this->valor;
  }
  function getEmpresa()
  {
    return $this->empresa;
  }

  function setCodNome($codNome)
  {
    $this->codNome = $codNome;
  }
  function setData($data)
  {
    $this->data = $data;
  }
  function setQuantidade($quantidade)
  {
    $this->quantidade = $quantidade;
  }
  function setValor($valor)
  {
    $this->valor = $valor;
  }
  function setEmpresa($empresa)
  {
    $this->empresa = $empresa;
  }
}
