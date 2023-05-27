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
    <?php
    include_once "AlunoDAO.php";
    include_once "Aluno.php";

    $dao = new AlunoDao();

    $ra = intval($_POST["ra"]);
    $f = $dao->buscarPeloRa($ra);

    $formato = "Y-m-d";
    $dataInscricao = DateTime::createFromFormat($formato, $f->getDataInscricao());
    ?>

    <fieldset>
        <legend>Registro</legend>
        <form action="alterar.php" method="post">

            <span>RA:</span> <input type="text" name="ra" value=
                "<?php echo $f->getRa() ?>" /><br />
            <span>nome:</span> <input type="text" name="nome" value=
                "<?php echo $f->getNome() ?>" /><br />
            <span>Data de inscrição:</span> <input type="text" name="dataInscricao" value=
                "<?php echo $dataInscricao->format("d/m/Y") ?>" /><br />
            <span>Nota final:</span> <input type="text" name="notafinal" value=
                "<?php echo $f->getNotafinal() ?>" /><br />

            <button type="submit">Alterar</button>
        </form>
    </fieldset>

</body>

</html>