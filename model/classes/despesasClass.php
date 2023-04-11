<?php
  class despesas{
    private $nome;
    private $valor;
    private $data;



    //////////////////------Get-----///////////
    function getNome(){
      return $this->nome;
    }
    function getValor(){
      return $this->valor;
    }
    function getData(){
      return $this->data;
    }

    ////////////////-----SET--------//////////
    function setNome($nome){
      $this->nome=$nome;
    }
    function setValor($valor){
      $this->valor=$valor;
    }
    function setData($data){
      $this->data=$data;
    }
  }
