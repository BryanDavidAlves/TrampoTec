

<?php
require_once "back-end/login/validador_acesso.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dados = [];

    // Loop para coletar todos os campos do formulário
    $contadorCampos = 1;
    while (isset($_POST["campo{$contadorCampos}"])) {
        $campo = $_POST["campo{$contadorCampos}"];
        $dados[] = $campo;
        $contadorCampos++;
    }

    // Agora, você pode fazer o que quiser com os dados (por exemplo, armazená-los no banco de dados ou exibi-los)
    foreach ($dados as $campo) {
        echo "Campo: " . htmlspecialchars($campo) . "<br>";
    }
}
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
    <link rel="stylesheet" href="css/cadastro-curso.css">

    <title>cadastrar Cursos</title>
</head>

<body>

    <!--<img class="cima" src="img/fundo2.png" alt="">-->
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <header>
        <div class="secao-cadastro">
            <a href="curso.php">
                <i id="icon-titulo" class="fa-solid fa-chevron-left" style="color: #ffffff;"></i>
                <h2>Cadastrar um novo curso</h2>
            </a>
        </div>
    </header>
    <main>
        <section class="formulario-etec">
            <form action="back-end/cadastro/salvarCadastroCurso.php" method="post" id="meuFormulario">

                <div class="input-box">
                    <label for="nome">NOME DO CURSO</label>
                    <input type="text" id="nomeCuso" name="nomeCuso">
                </div>

             
                <div id="campos">
                    <!-- Campos adicionados dinamicamente aparecerão aqui -->
                </div>
                <button type="button" id="adicionarCampo">Adicionar Requisitos</button>
                <div id="area">
                    <!-- Campos adicionados dinamicamente aparecerão aqui -->
                </div>
                <button type="button" id="adicionarArea">Adicionar Area</button>


                <?php
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
                }
                ?>
                <input type="submit" class="btn" value="CADASTRAR">
            </form>
        </section>
    </main>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const formulario = document.getElementById("meuFormulario");
            const camposContainer = document.getElementById("campos");
            const adicionarCampoButton = document.getElementById("adicionarCampo");

            let contadorCampos = 0;

            adicionarCampoButton.addEventListener("click", function () {
                contadorCampos++;

                const novoCampo = document.createElement("input");
                novoCampo.type = "text";
                novoCampo.name = `campo${contadorCampos}`;
                novoCampo.placeholder = `Campo ${contadorCampos}`;
                camposContainer.appendChild(novoCampo);
            });
        });
    </script>
     <script>
        document.addEventListener("DOMContentLoaded", function () {
            const formulario = document.getElementById("meuFormulario");
            const camposContainer = document.getElementById("area");
            const adicionarCampoButton = document.getElementById("adicionarArea");

            let contadorArea = 0;

            adicionarCampoButton.addEventListener("click", function () {
                contadorArea++;

                const novoArea = document.createElement("input");
                novoArea.type = "text";
                novoArea.name = `area${contadorArea}`;
                novoArea.placeholder = `Area ${contadorArea}`;
                camposContainer.appendChild(novoArea);
            });
        });
    </script>
</body>

</html>