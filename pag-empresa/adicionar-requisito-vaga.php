<?php
require_once "./beck-end/login/validador_acesso.php";
?>
<?php
include('../dao/conexao.php');

$querySelect = "SELECT * FROM  tb_curso  ORDER BY nome ASC";


$query = $conexao->query($querySelect);

$resultado = $query->fetchAll();



$querySelect2 = "SELECT * FROM  tb_requisito ";

$query2 = $conexao->query($querySelect2);

$requisito = $query2->fetchAll();
// Loop para coletar todos os campos do formulário

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
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
    <link rel='stylesheet' href='../pag-empresa/css/cadastrar-vaga.css'>
    <title>TrampoTec</title>
</head>

<body>

    <?php include('../pag-empresa/componentes/sidebar.php') ?>
    <?php include('../pag-empresa/componentes/email.php') ?>
    <?php include('../pag-empresa/componentes/notificacao.php') ?>


    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">
    <main class="main">

        <a href="./vagas.php"><i class="fa-solid fa-chevron-left"></i> Cadastro de requisito</a>


        <section class="formulario-cadastrar-vaga">
            <form action="beck-end/cadastroVaga/salvarCadastroVaga.php" method="post">

                <h1>FORMULARIO CADASTRO DE REQUISITOS</h1>

                <div class="alinhaento-inputs">

                    <div>
                        <span>
                            <label for="nome">NOME</label>
                            <input name="nome" type="text" required>

                        </span>

                        <span>
                            <label for="cidade">CIDADE</label>
                            <input name="cidade" type="text" required>
                        </span>
                    </div>

                    <div>
                        <span>
                            <label for="bairro">BAIRRO</label>
                            <input name="bairro" type="text" required>
                        </span>


                        <span>
                            <label for="tipo">TIPO TRABALHO</label>
                            <input name="tipo" type="text" required>
                        </span>
                        <span>
                            <label for="tipo">Semana</label>
                            <input name="semana" type="text" placeholder="Seg-Sex" maxlength="7" required>
                        </span>
                    </div>

                    <div>
                        <span>
                            <label for="salario">SALARIO</label>
                            <input name="salario" type="number" required>
                        </span>
                        <span>
                            <label>Curso</label>
                            <select class="selects" name="curso" id="curso" required>
                                <option>Selecione um curso</option>
                                <?php foreach ($resultado as $resultado) { ?>
                                    <option value="<?= $resultado[0] ?>">
                                        <?= $resultado[1] ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <span>


                    </div>

                    <div>
                        <span>
                            <label for="descricao">DESCRIÇÃO</label>
                            <input class="descricao" name="descricao" type="text" required>
                        </span>

                    </div>

                    <div>
                        <span>
                            <label for="area">AREA</label>
                            <input name="area" type="text" required>
                        </span>

                        <span>
                            <label for="periodo">PERIODO</label>
                            <select class="selects" name="periodo" required>
                                <option value="noturno">Noturno</option>
                                <option value="diurno">Diurno</option>
                                <option value="matinal">Matinal</option>
                                <option value="integral">integral</option>
                            </select>
                        </span>
                    </div>



                    <div>
                        <span>
                            <label for="inicio">INICIO</label>
                            <input name="inicio" type="time" required>
                        </span>

                        <span>
                            <label for="termino">TERMINO</label>
                            <input name="termino" type="time" required>
                        </span>
                    </div>

                </div>


                <div class="caixa-add-requisito">
                    <span>
                        <i id="adicionarCampo" class="add-requisito fa-solid fa-circle-plus"></i>
                        ADICIONAR REQUISITO
                    </span>
                    <div id="campos" class="body-inputs">

                    </div>
                </div>

                <?php
                if (isset($_GET['CadastroVaga']) && $_GET['CadastroVaga'] == "erro") {
                    ?>
                    <div class="text-danger">
                        Erro ao Cadastrar Vaga
                    </div>
                    <?php
                }
                ?>
                <button class="botao-vaga" type="submit">CADASTRAR</button>
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

                const novoCampo = document.createElement("select");
                novoCampo.name = `campo${contadorCampos}`;
                novoCampo.placeholder = `Requisito ${contadorCampos}`;
                novoCampo.list = 'requisito'

                // Você pode adicionar opções ao select se desejar

                var select = document.createElement("select");
                <?php foreach ($requisito as $requisito) { ?>
                    // Crie um novo elemento select para cada item de $requisito
                   

                    // Crie uma opção para o select
                    var option1 = document.createElement("option");
                    option1.value = "<?= $requisito[0] ?>";
                    option1.text = "<?= $requisito[1] ?>";

                    // Adicione a opção ao select
                    select.appendChild(option1);

                    // Adicione o select à página
                   
                    document.getElementById("campos").appendChild(select);
                <?php } ?>
                


            });

        });
    </script>

    <script src="./js/funcoes.js"></script>
    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>