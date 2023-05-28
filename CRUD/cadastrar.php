<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <?php
        include_once "Aluno.php";
        include_once "AlunoDAO.php";

        $br_data = DateTime::createFromFormat("d/m/Y", $_POST["dataInscricao"]);

        $aluno = new Aluno(
            $ra = intval($_POST["ra"]),
            $nome = $_POST["nome"],
            $data = $br_data->format("Y-m-d"),
            $nota = floatval($_POST["notafinal"])
        );

        $dao = new AlunoDao();
        if ($dao->inserir($aluno))
        {
            echo "<h4 class=\"center\">Aluno cadastrado com sucesso</h4>";
        }
        else
        {
            echo "<h4 class=\"center\">Cadastro falhou. Verifique as informações</h4>";
        }
    ?>

    <p><a href="index.html">Voltar</a></p>
</body>
</html>