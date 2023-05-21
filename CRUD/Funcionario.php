<?php
class Funcionario{
    private $re;
    private $nome;
    private $dataNascimento;
    private $salario;
    
    //construtor
    function __construct($re, $nome, $dataNascimento, $salario)
    {
        $this->re = $re;
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->salario = $salario;
    }

    function getRe(){
        return $this->re;
    }
    function getNome(){
        return $this->nome;
    }
    function getDataNascimento(){
        return $this->dataNascimento;
    }
    function getSalario(){
        return $this->salario;
    }

    function setRe($re){
        $this->re = $re;
    }
    function setNome($nome){
        $this->nome = $nome;
    }
    function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }
    function setSalario($salario){
        $this->salario = $salario;
    }

}