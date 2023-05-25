<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>
    <?php
    include_once "Aluno.php";
    include_once "AlunoDAO.php";

    $ra = intval($_POST["ra"]);
    $nome = $_POST["nome"];
    $formato = "d/m/Y";
    $dataInscricao = DateTime::createFromFormat($formato, $_POST["dataInscricao"]);
    $notafinal = floatval($_POST["notafinal"]);
    $aluno = new Aluno(
        $ra,
        $nome,
        $dataInscricao->format("Y-m-d"),
        $notafinal
    );
    $dao = new AlunoDao();
    if ($dao->alterar($aluno)) {
        echo "Alterado";
    } else {
        echo "Não alterado";
    }
    ?>
</body>

</html>