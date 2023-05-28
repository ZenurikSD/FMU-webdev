<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Excluir</title>
</head>

<body>
    <?php
    include_once "AlunoDAO.php";
    include_once "Aluno.php";

    global $conn;

    $dao = new AlunoDao();

    $ra = $_POST["ra"];
    
    $func = new Aluno($ra, null, null, null);

    if ($dao->excluir($func))
    {
        echo "Aluno excluido";
    } else {
        echo "Não há registro com esse RA.";
    }

    ?>

    <p><a href="index.html">Voltar</a></p>
</body>

</html>