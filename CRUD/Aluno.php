<?php
class Aluno{
    private $ra;
    private $nome;
    private $dataEnvio;
    private $notafinal;
    
    //construtor
    function __construct($ra, $nome, $dataEnvio, $notafinal)
    {
        $this->ra = $ra;
        $this->nome = $nome;
        $this->dataEnvio = $dataEnvio;
        $this->notafinal = $notafinal;
    }

    function getRa(){
        return $this->ra;
    }
    function getNome(){
        return $this->nome;
    }
    function getDataEnvio(){
        return $this->dataEnvio;
    }
    function getNotafinal(){
        return $this->notafinal;
    }

    function setRa($ra){
        $this->ra = $ra;
    }
    function setNome($nome){
        $this->nome = $nome;
    }
    function setDataEnvio($dataEnvio){
        $this->dataEnvio = $dataEnvio;
    }
    function setnotafinal($notafinal){
        $this->notafinal = $notafinal;
    }

}