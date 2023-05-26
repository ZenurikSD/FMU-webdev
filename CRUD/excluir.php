<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        echo "Erro";
    }

    ?>
</body>

</html>