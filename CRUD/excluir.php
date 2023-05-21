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
    include_once "FuncDAO_exc.php";
    include_once "../Funcionario.php";

    global $conn;

    $dao = new FuncionarioDao();

    $re = $_POST["re"];
    
    $func = new Funcionario($re, null, null, null);

    if ($dao->excluir($func))
    {
        echo "Funcionário excluido";
    } else {
        echo "Erro";
    }

    ?>
</body>

</html>