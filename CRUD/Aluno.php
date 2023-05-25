<?php
class Aluno{
    private $ra;
    private $nome;
    private $dataInscricao;
    private $notafinal;
    
    //construtor
    function __construct($ra, $nome, $dataInscricao, $notafinal)
    {
        $this->ra = $ra;
        $this->nome = $nome;
        $this->dataInscricao = $dataInscricao;
        $this->notafinal = $notafinal;
    }

    function getRa(){
        return $this->ra;
    }
    function getNome(){
        return $this->nome;
    }
    function getDataInscricao(){
        return $this->dataInscricao;
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
    function setDataInscricao($dataInscricao){
        $this->dataInscricao = $dataInscricao;
    }
    function setnotafinal($notafinal){
        $this->notafinal = $notafinal;
    }

}