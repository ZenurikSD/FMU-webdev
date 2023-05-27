<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
        include_once "Aluno.php";
        include_once "AlunoDAO.php";

        $aluno = new Aluno(
            $ra = intval($_GET["ra"]),
            $nome = $_GET["nome"],
            $data = DateTime::createFromFormat('d/m/y', $_POST["dataInscricao"])->format("Y-m-d"),
            $nota = $_GET["notafinal"]
        )


    ?>
</body>
</html>