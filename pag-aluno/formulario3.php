<?php
require_once "./back-end/login/validador_acesso.php";
include('../dao/conexao.php');
$aluno_id = $_SESSION['idAluno'];


?>
<?php
require_once "./back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!--link icone filtro-->
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    

    <title>Meu Curriculo</title>

    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .align-tudo {
            position: fixed;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 2%;
            

        }

        .form-container {
            align-items: center;
            display: flex;
            justify-content: space-between;
            width: 400px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            display: flex;
            flex-direction: column;
            border-radius: 20px;
            height: 480px;
            padding: 10px;
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

        .tela {
            border-radius: 30px;
            height: 290px;
            width: 300px;
            background-color: rgba(247, 247, 247, 0.641);
        }

        th {
            text-align: center;
            font-weight: bold;
            font-size: 15px;
        }

        td {
            text-align: center;
            font-size: 15px;
        }

        .container {

            display: flex;
            flex-direction: column;
        }

        .button {
            margin-left: auto;
            margin-right: auto;
            display: block;
            width: 300px;
        }

        .align-habilidade {
            display: flex;
            flex-direction: column;
            width: 300px;
            padding: 10px;
            height: 115px;
            overflow: auto;
        }
    </style>

</head>

<body>
    <?php
    include('../pag-aluno/components/header.php');
    ?>
    <div class="align-tudo">
        <div class="form-container">
            <div class="formulario">
                <form action="back-end/cadastro/salvarCurriculoConhecimento.php" id="knowledge-form" method="POST">

                    <label for="conhecimentos">Conhecimentos:</label>
                    <input type="text" id="conhecimentos" name="conhecimentos" placeholder="Digite um conhecimento">
                    <button type="submit" class="button">Adicionar Novo Conhecimento</button>
                    <br>
                    <label for="habilidades">Habilidades:</label>
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">


                        <div class="align-habilidade">
                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck1">Trabalho em equipe</label>

                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck1">Trabalho em equipe</label>

                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck1">Trabalho em equipe</label>

                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck1">Trabalho em equipe</label>

                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck1">Trabalho em equipe</label>

                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck1">Trabalho em equipe</label>
                        </div>


                    </div>
                    <br>
                    <input type="submit" value="Finalizar">
                </form>
            </div>

            <div class="tela">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Conhecimentos selecionados:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $querySelect = "SELECT * FROM  tb_conhecimento_aluno WHERE fk_idAluno = $aluno_id ";

                        $query = $conexao->query($querySelect);

                        $conhecimentoId = $query->fetchAll();



                        foreach ($conhecimentoId as $conhecimentoId) {

                            $idCon = $conhecimentoId[0];

                            $querySelect = "SELECT * FROM  tb_conhecimento WHERE idConhecimento = $idCon  ";

                            $query = $conexao->query($querySelect);

                            $nome = $query->fetchAll();

                            foreach ($nome as $nome) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $nome[1] ?>
                                    </td>
                                    <td class="icone-table"> <a
                                            href="back-end/crudConhecimento/conhecimento-delete.php?id=<?= $nome[0] ?>"><i
                                                class="fa-solid fa-x" style="color: #000000;"></i></a>

                                    </td>


                                </tr>
                            <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>

</html>
<script src="js/funcoes.js"></script>
<script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>