<?php
include_once "Funcionario.php";
include_once "Conexao.php";

class FuncionarioDao
{
    function inserir(Funcionario $funcionario)
    {
        global $conn;
        $sql = $conn->prepare("INSERT INTO funcionario VALUES(?,?,?,?)");
        $p1 = $funcionario->getRe();
        $p2 = $funcionario->getNome();
        $p3 = $funcionario->getDataNascimento();
        $p4 = $funcionario->getSalario();
        $sql->bind_param("issd", $p1, $p2, $p3, $p4);
        $sql->execute();
        if ($sql->affected_rows > 0) {
            return true;
        }
    }

    function excluir(Funcionario $funcionario)
    {
        global $conn;
        $sql = $conn->prepare("DELETE FROM funcionario WHERE re = ?");
        $p1 = $funcionario->getRe();

        $sql->bind_param("i", $p1);

        $sql->execute();

        if ($sql->affected_rows > 0) {
            return true;
        }
    }

    function alterar(Funcionario $funcionario)
    {
        global $conn;

        $string = "UPDATE funcionario SET nome = ?, dataNascimento = ?, salario = ? WHERE re = ?";

        $sql = $conn->prepare($string);

        $p1 = $funcionario->getNome();
        $p2 = $funcionario->getDataNascimento();
        $p3 = $funcionario->getSalario();
        $p4 = $funcionario->getRe();

        $sql->bind_param("ssdi", $p1, $p2, $p3, $p4);
        $sql->execute();

        if ($sql->affected_rows > 0) {
            return true;
        }
    }

    function listar()
    {
        global $conn;

        $result = $conn->query("SELECT * FROM funcionario");
        $lista = array();

        while ($row = $result->fetch_assoc())
            array_push($lista, new Funcionario(
                $row["re"],
                $row["nome"],
                $row["dataNascimento"],
                $row["salario"]
            ));
        return $lista;
    }

    function buscarPeloRe($re)
    {
        global $conn;

        $nome = "";
        $dataNascimento = "";
        $salario = 0.0;

        $query = $conn->prepare("SELECT * FROM funcionario WHERE re=?");
        $result = $query->bind_param("i", $re);
        $query->execute();
        $query->bind_result($re, $nome, $dataNascimento, $salario);
        if ($query->fetch()) {
            return new Funcionario($re, $nome, $dataNascimento, $salario);
        }
    }   
}
