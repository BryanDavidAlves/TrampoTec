<?php
include('../dao/conexao.php');

require_once "back-end/login/validador_acesso.php";

$querySelect = "SELECT * FROM  tb_curso";

$query = $conexao->query($querySelect);

$curso = $query->fetchAll();

if ($_POST) {
    $id_curso = $_POST['id_curso'];
    $querySelect = "SELECT * FROM tb_curso  WHERE idCurso = $id_curso";
    $resultado = $conexao->query($querySelect);
    $curso = $resultado->fetch();
    $id_curso = $curso["idCurso"];
    $nome = $curso["nome"];
    $cargaHoraria = $curso["cargaHoraria"];
    $semestre = $curso["semestre"];
    $modalidade = $curso["modalidade"];
    $ensino = $curso["ensino"];
    $querySelect = "SELECT * FROM tb_eixo  WHERE fk_idCurso = $id_curso";
    $resultado = $conexao->query($querySelect);
    $eixo = $resultado->fetch();
    $eixo1 = $eixo["eixo"];


} else {
    $id_curso = "";
    $nome = "";
    $cargaHoraria = "";
    $semestre = "";
    $modalidade = "";
    $ensino = "";
    $eixo1 = "";
}

/*if ($_POST) {
    $id_etec = $_POST['id_etec'];
    $querySelect = "SELECT * FROM tb_etec  WHERE idEtec = $id_etec";
    $resultado = $conexao->query($querySelect);
    $etec = $resultado->fetch();
    $id_etec = $etec["idEtec"];
    $nome = $etec["nome"];
    $email = $etec["email"];
    $codigo = $etec["codigo"];
    $municipio = $etec["municipio"];
} else {
    $id_etec = "";
    $nome = "";
    $email = "";
    $codigo = "";
    $municipio = "";
    $cursoEtec = "";
}

*/
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/cadastro-etec.css">

    <title>cadastrar etecs</title>
</head>

<body>
    <!--<img class="cima" src="img/fundo2.png" alt="">-->
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <header>
        <div class="secao-cadastro">
            <a href="etec.php">
                <i id="icon-titulo" class="fa-solid fa-chevron-left" style="color: #ffffff;"></i>
                <h2>Cadastrar curso para a ETEC</h2>
            </a>
        </div>
    </header>
    <main>
        <section class="formulario-etec">
            <form action="" method="post">

                <div class="input-box">
                    <label for="curso">CURSO</label>
                    
                    <select id="cursos">
                        <?php foreach ($curso as $curso) { ?>
                            <option value="<?= $curso[0] ?>"><?= $curso[1] ?></option>

                        <?php } ?>
                    </select>


                    <!--<div class="campos-selects" id="campoSelect"></div>-->

                </div>
                
                <button class="addCampo" type="submit">ADICIONAR CURSO</button>
                <?php
                /*
                if (isset($_GET['cadastro']) && $_GET['cadastro'] == "feito") {
                ?>

                    <div class="text-green">
                        Cadastro Realizado
                    </div>

                <?php
                }
                ?>
                <?php
                if (isset($_GET['cadastro']) && $_GET['cadastro'] == "erro") {
                ?>
                    <div class="text-danger">
                        Cadastro com erro
                    </div>

                <?php
                }*/
                ?>

                <input type="submit" class="btn" value="CADASTRAR">


                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">CURSO</th>
                            <th scope="col">MODALIDADE</th>
                        </tr>
                    </thead>
                    <tbody class="infos">

                        <tr>
                            <td>
                                abc
                            </td>
                            <td>
                                de
                            </td>

                        </tr>

                        <tr>
                            <td>
                                abc
                            </td>
                            <td>
                                de
                            </td>

                        </tr>
                        
                    </tbody>


                </table>
            </form>


        </section>
    </main>
    <script src="modal-etec.js"></script>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script>
        var count = 0;

        function adicionarSelect() {
            count++;
            // Crie um elemento select
            var select = document.createElement("select");


            // Defina os atributos desejados para o select
            select.name = "selectName[]"; // Nome do select
            select.id = ("selectId" + count); // ID do select (opcional)

            <?php foreach ($curso as $curso) { ?>
                // Crie opções para o select
                var option1 = document.createElement("option");
                option1.value = "<?= $curso[0] ?>";
                option1.text = "<?= $curso[1] ?>";

                // Adicione as opções ao select
                select.appendChild(option1);

                // Adicione o select à página
                document.getElementById("campoSelect").appendChild(select);

            <?php } ?>
        }

        function apagarUltimoSelect() {
            var campoSelect = document.getElementById("campoSelect");
            var selects = campoSelect.getElementsByTagName("select");

            if (selects.length > 0) {
                // Remove o último select da lista
                campoSelect.removeChild(selects[selects.length - 1]);
            }
        }
    </script>

</body>

</html>