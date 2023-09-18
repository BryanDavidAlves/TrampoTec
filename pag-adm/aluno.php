<?php
require_once "back-end/login/validador_acesso.php";
?>
<?php
include('../dao/conexao.php');

$querySelect = "SELECT * FROM  tb_aluno";

$query = $conexao->query($querySelect);

$resultado = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/aluno.css">
    <title>Document</title>
</head>

<body>
    <img class="cima" src="img/fundo2.png" alt="">
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <header>
        <h1>Alunos</h1>
    </header>
    <main>
        <div class="secao-busca">
            <section class="sistema-busca">
                <div class="barra-pesquisa">
                    <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i>
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="">
                </div>

                <div class="align-filtro">
                    <div class="filtro" onclick="abrirFiltro()">
                        <span class="material-symbols-outlined">
                            tune
                        </span>
                        <p>Filtrar</p>

                    </div>
                </div>

                <div class="modal-filtro" id="abrir-filtro">
                    <form action="">
                        <div class="align-form-filtro">
                            <label for="">Periodo</label>
                            <input type="checkbox" name="" id="">
                        </div>
                        <div class="align-form-filtro">
                            <label for="">Horario</label>
                            <input type="checkbox" name="" id="">
                        </div>
                        <div class="align-form-filtro">
                            <label for="">Curso</label>
                            <input type="checkbox" name="" id="">
                        </div>
                        <div class="align-form-filtro">
                            <label for="">Area</label>
                            <input type="checkbox" name="" id="">
                        </div>
                        <input type="submit" value="Aplicar" class="button-filtro">

                    </form>
                </div>
        </div>
        </section>
        <section class="aluno">

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>EMAIL INSTITUICIONAL</th>      
                        <th>CPF</th>
                        <th>INSTITUIÇÃO</th>
                        <th>CEP</th>
                        <th>ESTADO</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($resultado as $resultado) { ?>
                    <tr class="infos">
                        <td class="table-id"><?=$resultado[0]?></td>
                        <td class="table-nome-aluno"><?=$resultado[3]?></td>
                        <td class="table-email-aluno"><?=$resultado[1]?></td>
                        <td class="text-center"><?=$resultado[4]?></td>
                        <td class="text-center"><?=$resultado[10]?></td>
                        <td class="text-center"><?=$resultado[9]?></td>
                        <td class="text-center"><?=$resultado[7]?></td>
                        <td class="icone-table">
                            <a  href="back-end/crudAluno/aluno-delete.php?id=<?= $resultado[0] ?>"><i  class="fa-solid fa-x" style="color: #000000;"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        </section>
    </main>
    <script src="modal-aluno.js"></script>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>