<?php
include_once "Aluno.php";

$conn = new mysqli("localhost", "user", "123", "crud");

class AlunoDao
{
    function inserir(Aluno $aluno)
    {
        global $conn;
        $sql = $conn->prepare("INSERT INTO Aluno VALUES(?,?,?,?)");
        $p1 = $aluno->getRa();
        $p2 = $aluno->getNome();
        $p3 = $aluno->getDataInscricao();
        $p4 = $aluno->getNotafinal();
        $sql->bind_param("issd", $p1, $p2, $p3, $p4);
        $sql->execute();
        if ($sql->affected_rows > 0) {
            return true;
        }
    }

    function excluir(Aluno $aluno)
    {
        global $conn;
        $sql = $conn->prepare("DELETE FROM Aluno WHERE ra = ?");
        $p1 = $aluno->getRa();

        $sql->bind_param("i", $p1);

        $sql->execute();

        if ($sql->affected_rows > 0) {
            return true;
        }
    }

    function alterar(Aluno $aluno)
    {
        global $conn;

        $string = "UPDATE Aluno SET nome = ?, dataInscricao = ?, notafinal = ? WHERE ra = ?";

        $sql = $conn->prepare($string);

        $p1 = $aluno->getNome();
        $p2 = $aluno->getDataInscricao();
        $p3 = $aluno->getNotafinal();
        $p4 = $aluno->getRa();

        $sql->bind_param("ssdi", $p1, $p2, $p3, $p4);
        $sql->execute();

        if ($sql->affected_rows > 0) {
            return true;
        }
    }

    function listar()
    {
        global $conn;

        $result = $conn->query("SELECT * FROM Aluno");
        $lista = array();

        while ($row = $result->fetch_assoc())
            array_push($lista, new Aluno(
                $row["ra"],
                $row["nome"],
                $row["dataInscricao"],
                $row["notafinal"]
            ));
        return $lista;
    }

    function buscarPeloRa($ra)
    {
        global $conn;

        $nome = "";
        $dataInscricao = "";
        $notafinal = 0.0;

        $query = $conn->prepare("SELECT * FROM Aluno WHERE ra=?");
        $result = $query->bind_param("i", $ra);
        $query->execute();
        $query->bind_result($ra, $nome, $dataInscricao, $notafinal);
        if ($query->fetch()) {
            return new Aluno($ra, $nome, $dataInscricao, $notafinal);
        }
    }   
}