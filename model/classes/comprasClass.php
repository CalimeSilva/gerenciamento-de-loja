<?php
class compras
{
  private $codNome;
  private $quantidade;
  private $empresa;
  private $valor;
  private $data;


  ////////////////////////-----Get-----////////////
  function getCodNome()
  {
    return $this->codNome;
  }
  function getQuantudade()
  {
    return $this->quantidade;
  }
  function getEmpresa()
  {
    return $this->empresa;
  }
  function getValor()
  {
    return $this->valor;
  }
  function getData()
  {
    return $this->data;
  }

  /////////////////sett////////////////////
  function setCodNome($codNome)
  {
    $this->codNome = $codNome;
  }
  function setQuantidade($quantidade)
  {
    $this->quantidade = $quantidade;
  }
  function setEmpresa($empresa)
  {
    $this->empresa = $empresa;
  }
  function setValor($valor)
  {
    $this->valor = $valor;
  }
  function setData($data)
  {
    $this->data = $data;
  }
}
