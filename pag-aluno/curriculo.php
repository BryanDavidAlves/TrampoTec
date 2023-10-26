<?php
require_once "./back-end/login/validador_acesso.php";
include '../dao/conexao.php';
$querySelect = "SELECT * FROM  tb_etec ";

$query = $conexao->query($querySelect);

$etec = $query->fetchAll();


$querySelect = "SELECT tb_aluno.* , tb_aluno_curso.*, tb_curso.*, tb_curso_etec.*, tb_etec.*, tb_perfil_aluno.*
FROM tb_aluno
INNER JOIN tb_aluno_curso ON tb_aluno_curso.fk_idAluno = tb_aluno.idAluno
INNER JOIN tb_curso ON tb_curso.idCurso = tb_aluno_curso.fk_idCurso
INNER JOIN tb_curso_etec ON tb_curso_etec.fk_idCurso = tb_curso.idCurso
INNER JOIN tb_etec ON tb_etec.idEtec = tb_curso_etec.fk_idEtec
INNER JOIN tb_perfil_aluno ON tb_perfil_aluno.fk_idAluno = tb_aluno.idAluno
";

$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();

require_once "./back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--link icone filtro-->
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/formulario2.css">

    <title>Meu Curriculo</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .align {
            display: "flex";
            justify-content: "center";
            align-items: "center";
            width: "100%";
            height: "100%";
            position: fixed;
        }

        .container .align-tabelas {

            display: "flex";
            justify-content: "center";
            align-items: "center";
            width: "100%";
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

</head>

<body>
    <?php
    include '../pag-aluno/components/header.php';
    ?>
    <div class="align">
        <div class="align-tabelas">
            <form action="./back-end/cadastro/salvarCurriculo.php" method="POST">
                <label for="nome">Nome:</label>
                <select class="input" placeholder="etec" id="nome-etec" name="nome-etec" placeholder="Nome da Instituição">
                    <option>Selecione uma Instituição</option>
                    <?php foreach ($etec as $etec) { ?>
                        <option value="<?= $etec[0] ?>"><?= $etec[1] ?></option>
                    <?php } ?>
                </select></p>
           
                <label for="curso">Curso:</label>
                <select class="input" placeholder="curso" name="curso" id="curso">
                    <option value="">Selecione seu curso</option>

                </select>

                <label for="periodo">Período:</label>
                <select class="input" placeholder="periodo" name="periodo">
                    <option value="">Selecione um período</option>
                    <option value="">Vespertino</option>
                    <option value="">Noturno</option>
                    <option value="">Matutino</option>
                    <option value="">Integral</option>
                </select>
                <select class="input" placeholder="semestre" name="semestre">
                    <option value="1">1 SEMESTRE</option>
                    <option value="2">2 SEMESTRE</option>
                    <option value="3">3 SEMESTRE</option>
                    <option value="4">4 SEMESTRE</option>
                    <option value="5">5 SEMESTRE</option>
                    <option value="6">6 SEMESTRE</option>

                </select>

                <label for="carga_horaria">Carga Horária:</label>
                <input type="number" id="carga_horaria" name="duracao" required>

                <label for="conclusao">Conclusão:</label>
                <input class="input" placeholder="conclusao" name="conclusao" type="date"></p>

                <input type="submit" value="Avançar">
            </form>
            <?php foreach ($resultado as $resultado) { ?>
                <?= $resultado[0] ?>
               
       
                <?php } ?></div>
    </div>


</body>

</html>
<script src="js/funcoes.js"></script>