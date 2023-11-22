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




if ($_POST) {
    $id_vaga = $_POST['id'];
    echo $id_vaga;
    $querySelect = "SELECT * FROM tb_vaga  WHERE idVaga = $id_vaga";
    $resultado1 = $conexao->query($querySelect);
    $vaga = $resultado1->fetch();
    $id_vaga = $vaga["idVaga"];
    $nome = $vaga['nome'];
    $cidade = $vaga['cidade'];
    $bairro = $vaga['bairro'];
    $salario = $vaga['salario'];
    $descricao = $vaga['descricao'];
    $area = $vaga['area'];
    $periodo = $vaga['periodo'];
    $inicio = $vaga['inicio'];
    $termino = $vaga['termino'];
    $tipoTrabalho = $vaga['modalidade'];
    $semana = $vaga['escala'];
}  else if ($_GET) {
    $id_vaga = $_GET['id'];
    $querySelect = "SELECT * FROM tb_vaga  WHERE idVaga = $id_vaga";
    $resultado1 = $conexao->query($querySelect);
    $vaga = $resultado1->fetch();
    $id_vaga = $vaga["idVaga"];
    $nome = $vaga['nome'];
    $cidade = $vaga['cidade'];
    $bairro = $vaga['bairro'];
    $salario = $vaga['salario'];
    $descricao = $vaga['descricao'];
    $area = $vaga['area'];
    $periodo = $vaga['periodo'];
    $inicio = $vaga['inicio'];
    $termino = $vaga['termino'];
    $tipoTrabalho = $vaga['escala'];
    $semana = $vaga['modalidade'];
}  else {
    $id_vaga = "";
    $nome = "";
    $cidade = "";
    $bairro = "";
    $salario = "";
    $curso = "";
    $descricao = "";
    $area = "";
    $periodo = "";
    $inicio = "";
    $termino ="";
    $tipoTrabalho = "";
    $semana = "";
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

        <a href="./vagas.php"><i class="fa-solid fa-chevron-left"></i> Cadastro de Vagas</a>


        <section class="formulario-cadastrar-vaga">
            <form action="beck-end/cadastroVaga/salvarCadastroVaga.php" method="post">

                <h1>FORMULARIO DE CADASTRO DE VAGA</h1>

                <div class="alinhamento-inputs">

                    <div>
                        <span class="input-box">

                            <input name="nome" type="text" value="<?= $nome ?>"required>
                            <label class="label-anim" for="nome">NOME</label>

                        </span>

                        <span class="input-box">

                            <input name="cidade" type="text" value="<?= $cidade ?>" required>
                            <label class="label-anim" class="label-anim" for="cidade">CIDADE</label>
                        </span>
                    </div>

                    <div>
                        <span class="input-box">

                            <input name="bairro" type="text" value="<?= $bairro ?>" required>
                            <label class="label-anim" for="bairro">BAIRRO</label>
                        </span>



                        <span class="input-box-select">
                            <label for="tipo">TRABALHO</label>
                            <select class="selects" name="tipo" required>
                                <option value="presencial" <?= $tipoTrabalho == 'presencial' ? 'selected' : '' ?>>Presencial</option>
                                <option value="home-office" <?= $tipoTrabalho == 'home-office' ? 'selected' : '' ?>>Home-office</option>
                                <option value="hibrido" <?= $tipoTrabalho == 'hibrido' ? 'selected' : '' ?>>Hibrido</option>
                            </select>
                        </span>


                        <span class="input-box">

                            <input name="semana" type="text" maxlength="7" value="<?= $semana ?>" required>
                            <label class="label-anim" for="tipo">SEMANA</label>
                        </span>
                    </div>

                    <div>
                        <span class="input-box">
                            <input name="salario" type="number" value="<?= $salario ?>" required>
                            <label class="label-anim" for="salario">SALARIO</label>
                        </span>
                        <span class="input-box-select">
                            <label class="label-select">Curso</label>
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
                        <span class="input-box">

                            <input class="descricao" name="descricao" type="text" value="<?= $descricao ?>" required>
                            <label class="label-anim" for="descricao">DESCRIÇÃO</label>
                        </span>
                    </div>

                    <div>
                        <span class="input-box">

                            <input name="area" type="text" value="<?= $area ?>" required>
                            <label class="label-anim" for="area">AREA</label>
                        </span>

                        <span class="input-box-select">
                            <label for="periodo">PERIODO</label>
                            <select class="selects" name="periodo" required>
                                <option value="noturno"  <?= $periodo == 'noturno' ? 'selected' : '' ?>>Noturno</option>
                                <option value="diurno"  <?= $periodo == 'diurno' ? 'selected' : '' ?>>Diurno</option>
                                <option value="matinal" <?= $periodo == 'matinal' ? 'selected' : '' ?>>Matinal</option>
                                <option value="integral" <?= $periodo == 'integral' ? 'selected' : '' ?>>integral</option>
                            </select>
                        </span>
                    </div>



                    <div input-box-select>
                        <span>
                            <label for="inicio">INICIO</label>
                            <input style="border-radius: 10px; border: 2px solid #1a3b9e; width: 90%; padding: 1rem; font-size: 1rem;" name="inicio" type="time" value="<?= $inicio ?>" required>
                        </span>

                        <span>
                            <label for="termino">TERMINO</label>
                            <input style="border-radius: 10px; border: 2px solid #1a3b9e; width: 90%; padding: 1rem; font-size: 1rem;" name="termino" type="time"  value="<?= $termino ?>" required>
                        </span>
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
                <input type="hidden" id="id_vaga" name="id_vaga" value="<?= $id_vaga ?>">
                <button class="botao-vaga" type="submit">CADASTRAR</button>
            </form>

        </section>

    </main>

    <!-- <script>
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
                <*/?php foreach ($requisito as $requisito) { ?>
                    // Crie um novo elemento select para cada item de $requisito
                   

                    // Crie uma opção para o select
                    var option1 = document.createElement("option");
                    option1.value = "</?= $requisito[0] ?>";
                    option1.text = "</?= $requisito[1] ?>";

                    // Adicione a opção ao select
                    select.appendChild(option1);

                    // Adicione o select à página
                   
                    document.getElementById("campos").appendChild(select);
                <*/?php } ?>
                


            });

        });
    </script> -->

    <script src="./js/funcoes.js"></script>
    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>