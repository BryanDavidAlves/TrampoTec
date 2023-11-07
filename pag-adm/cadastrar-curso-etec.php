<?php
include('../dao/conexao.php');

require_once "back-end/login/validador_acesso.php";

$querySelect = "SELECT * FROM  tb_curso";

$query = $conexao->query($querySelect);

$curso = $query->fetchAll();



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
                    <input list="cursos" placeholder="Digite o nome do curso">
                    <datalist id="cursos">
                        <?php foreach ($curso as $curso) { ?>
                            <option value="<?= $curso[1] ?>"> </option>
                        <?php } ?>
                    </datalist>
                            <button class="addCampo" type="submit">ADICIONAR CURSO</button>


                    <!--<div class="campos-selects" id="campoSelect"></div>-->


                </div>

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