<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>

<body>

</body>
<?php
    include_once "FuncDAO_exc.php";
    include_once "../Funcionario.php";

    $dao = new FuncionarioDao();

    $re = intval($_POST["re"]);
    $f = $dao->buscarPeloRe($re);

    $formato = "Y-m-d"; 
    $dataNascimento = DateTime::createFromFormat($formato, $f->getDataNascimento());   
    
    $formatter = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);
    ?>

    <fieldset>
        <legend>Registro</legend>
        <form action="alterar.php" method="post">
        
        <span>RE:</span> <input type="text" name="re"
            value = "<?php echo $f->getRe()?>"/> <br/>
        <span>nome:</span> <input type="text" name="nome"
            value = "<?php echo $f->getNome()?>"/><br/>
        <span>data nascimento:</span> <input type="text" name="dataNascimento"
            value = "<?php echo $dataNascimento ->format("d/m/Y")?>"/><br/>
        <span>salário:</span> <input type="text" name ="salario"
            value = "<?php echo $formatter -> formatCurrency($f->getSalario(), "BRL")?>"/><br/>

        <button type="submit">Alterar</button>
        </form>
    </fieldset>
    
</html>