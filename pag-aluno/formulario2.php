<?php
require_once "./back-end/login/validador_acesso.php";
include '../dao/conexao.php';

$aluno_id = $_SESSION['idAluno'];

$querySelect = "SELECT * FROM  tb_idioma_aluno WHERE fk_idAluno = $aluno_id ";

$query = $conexao->query($querySelect);

$idioma = $query->fetchAll();

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
    <link rel="stylesheet" href="../pag-aluno/css/formulario2.css">


    <title>Meu Curriculo</title>


</head>

<body>

    <?php
    include '../pag-aluno/components/header.php';
    include '../pag-aluno/components/sidebar.php';
    ?>

    <div class="align-tudo">
        <form id="language-form" action="back-end/cadastro/salvarCurriculoIdioma.php" method="post">


            <label for="idioma">Idioma:</label>
            <select name="idioma">
                <option value="ingles">Inglês</option>
                <option value="espanhol">Espanhol</option>
                <option value="frances">Francês</option>
                <option value="outro">Outro</option>

            </select>

            <label for="nivel">Nível de Proficiência:</label>
            <select name="nivel">
                <option value="iniciante">Iniciante</option>
                <option value="intermediario">Intermediário</option>
                <option value="avancado">Avançado</option>
                <option value="outro">outro</option>
            </select>

            <div class="align-button">
                <button type="submit" class="button">Adicionar Novo Idioma</button>
                <a href="formulario3.php" class="link">Avançar<a>
            </div>

        </form>
        <section class="etec">
            <tbody class="infos" id="result">
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">IDIOMA</th>
                            <th scope="col">NÍVEL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($idioma as $idioma) { ?>
                            <tr>


                                <td>
                                    <?= $idioma[1] ?>
                                </td>
                                <td>
                                    <?= $idioma[2] ?>
                                </td>
                                <td class="icone-table"> <a
                                        href="back-end/crudIdioma/idioma-delete.php?id=<?= $idioma[0] ?>"><i
                                            class="fa-solid fa-x" style="color: #000000;"></i></a>

                                </td>

                            </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </tbody>
        </section>
    </div>




</body>

</html>
<script src="js/funcoes.js"></script>
<script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>