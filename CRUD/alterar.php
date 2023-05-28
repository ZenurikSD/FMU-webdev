<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Alterar</title>
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
        echo "Registro alterado";
    } else {
        echo "Não alterado";
    }
    ?>

    <p><a href="index.html">Voltar</a></p>
</body>

</html>