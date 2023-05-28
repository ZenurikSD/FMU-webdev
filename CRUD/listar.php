<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <title>Lista</title>
</head>

<body>
    <section>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">RA</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Data de início</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    include_once "Aluno.php";
                    include_once "AlunoDAO.php";
            
                    $dao = new AlunoDao();
            
                    $lista = $dao->listar();

                    foreach ($lista as $aluno) {
                        echo "<tr>";
                        echo "<td>",$aluno->getRa(),"</td>";
                        echo "<td>",$aluno->getNome(),"</td>";
                        echo "<td>",$aluno->getDataInscricao(),"</td>";
                        echo "<td>",$aluno->getNotafinal(),"</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </section>
</body>

</html>