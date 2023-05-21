<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>
    <?php
    include_once "../Funcionario.php";
    include_once "FuncDAO_exc.php";

    $re = intval($_POST["re"]);
    $nome = $_POST["nome"];
    $formato = "d/m/Y";
    $dataNascimento = DateTime::createFromFormat($formato, $_POST["dataNascimento"]);
    $salario = floatval($_POST["salario"]);
    $funcionario = new Funcionario(
        $re,
        $nome,
        $dataNascimento->format("Y-m-d"),
        $salario
    );
    $dao = new FuncionarioDao();
    if ($dao->alterar($funcionario)) {
        echo "Alterado";
    } else {
        echo "Não alterado";
    }
    ?>
</body>

</html>