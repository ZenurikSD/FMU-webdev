<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Buscar e alterar</title>
</head>

<body>
    <?php
    include_once "AlunoDAO.php";
    include_once "Aluno.php";

    $dao = new AlunoDao();

    $ra = intval($_POST["ra"]);
    $f = $dao->buscarPeloRa($ra);

    $formato = "Y-m-d";
    $dataEnvio = DateTime::createFromFormat($formato, $f->getDataEnvio());
    ?>

    <fieldset>
        <legend>Registro</legend>
        <form action="alterar.php" method="post">

            <span>RA:</span> <input type="text" name="ra" value=
                "<?php echo $f->getRa() ?>" /><br />
            <span>nome:</span> <input type="text" name="nome" value=
                "<?php echo $f->getNome() ?>" /><br />
            <span>Data de envio:</span> <input type="text" name="dataEnvio" value=
                "<?php echo $dataEnvio->format("d/m/Y") ?>" /><br />
            <span>Nota final:</span> <input type="text" name="notafinal" value=
                "<?php echo $f->getNotafinal() ?>" /><br />

            <button type="submit">Alterar registro</button>
        </form>
    </fieldset>

    <p><a href="index.html">Voltar</a></p>

</body>

</html>