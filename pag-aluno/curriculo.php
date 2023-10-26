<?php
require_once "./back-end/login/validador_acesso.php";
include '../dao/conexao.php';
$querySelect = "SELECT * FROM  tb_etec ";

$query = $conexao->query($querySelect);

$etec = $query->fetchAll();

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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--link icone filtro-->
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/curriculo.css">

    <title>Meu Curriculo</title>

</head>

<body>
    <?php
    include '../pag-aluno/components/header.php';
    include '../pag-aluno/components/sidebar.php';
    ?>

<div class="align-tudo">
    <div class="align-tabela">
        <form action="./back-end/cadastro/salvarCurriculo.php" method="POST">
            <label for="nome">Instituição:</label>
            <select class="input" placeholder="etec" id="nome-etec" name="nome-etec"
                      placeholder="Nome da Instituição">
                      <option>Selecione uma Instituição</option>
                                            <?php foreach ($etec as $etec) {?>
                                                <option value="<?=$etec[0]?>"><?=$etec[1]?></option>
                                            <?php }?>
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
            <input class="input" placeholder="conclusao"  name="conclusao" type="date"></p>

            <input type="submit" value="Avançar">
            <button class="button">
            <a href="formulario2.php" >Proximo</a>
            </button>
        </form>

        <!--<section class="cartas">
                    <div class="card-carta">
                        <section class="header-card">
                            <h4>Curso Cadastrado</h4>
                        </section>
                        <span class="prof">
                                <h3>ETEC:</h3>
                                <p>Etec de Guaianases</p>
                            </span>

                            <span class="prof">
                                <h3>Curso:</h3>
                                <p>Desenvolvimento De Sistemas</p>
                            </span>

                            <span class="prof">
                                <h3>Periodo:</h3>
                                <p>Vespertino</p>
                            </span>

                            <span class="prof">
                                <h3>Semestre:</h3>
                                <p>1 Semestre</p>
                            </span>

                            <span class="prof">
                                <h3>Carga Horária:</h3>
                                <p>1 Semestre</p>
                            </span>

                            <span class="prof">
                                <h3>Conclusão:</h3>
                                <p>Dezembro</p>
                            </span>
                        
                    </div>
                    
                </section>-->
        </div>
    </div>


</body>

</html>
<script src="js/funcoes.js"></script>
