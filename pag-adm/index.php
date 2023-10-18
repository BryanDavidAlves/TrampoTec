<?php
require_once "back-end/login/validador_acesso.php";
?>
<?php
include('../dao/conexao.php');
$querySelect = "SELECT * FROM tb_empresa WHERE aprovado = '1'";
$resultado = $conexao->query($querySelect);
$empresa = $resultado->fetchALL();
$n_empresa = count($empresa);


$querySelect = "SELECT * FROM tb_aluno";
$resultado = $conexao->query($querySelect);
$aluno = $resultado->fetchALL();
$n_aluno = count($aluno);

$querySelect = "SELECT * FROM tb_professor";
$resultado = $conexao->query($querySelect);
$professor = $resultado->fetchALL();
$n_professor = count($professor);



$querySelect = "SELECT * FROM tb_admin";
$resultado = $conexao->query($querySelect);
$admin = $resultado->fetchALL();
$n_admin = count($admin);



$querySelect = "SELECT * FROM tb_empresa WHERE aprovado = '0'";
$resultado = $conexao->query($querySelect);
$pendenteEm = $resultado->fetchALL();
$n_pendenteEmpresa = count($pendenteEm);

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>
    <header>
        <h1>Dashboard</h1>
    </header>
    <!--<img class="baixo" src="img/fundo1.png" alt="">-->

    <img class="cima" src="img/fundo2.png" alt="">

    <main>
        <section class="dashboard">

            <div class="align-card">
                <a href="empresa.php?aprovado=1">
                    <div class="card">
                        <div class="header-card">
                            <h3>Empresas cadastradas </h3>
                            <i id="empresas" class="fa-solid fa-building"></i>
                        </div>
                        <h2>
                            <?= $n_empresa ?>
                        </h2>
                    </div>
                </a>
                <a href="professor.php">
                    <div class="card">
                        <div class="header-card">
                            <h3>Professores cadastrados</h3>
                            <i id="prof" class="fa-solid fa-chalkboard-user"></i>
                        </div>
                        <h2>
                            <?= $n_professor ?>
                        </h2>
                    </div>
                </a>
                <a href="aluno.php">
                    <div class="card">
                        <div class="header-card">
                            <h3>Alunos cadastrados</h3>
                            <i id="aluno" class="fa-solid fa-user" ></i>
                        </div>
                        <h2>
                            <?= $n_aluno ?>
                        </h2>
                    </div>
                </a>
                
                <a href="adm.php">
                    <div class="card">
                        <div class="header-card">
                            <h3>Administradores Cadastrados</h3>
                            <i id="adm" class="fa-solid fa-user"></i>
                        </div>
                        <h2>
                            <?= $n_admin ?>
                        </h2>
                    </div>
                </a>

        
                <a href="empresa.php?aprovado=0">
                <div class="card">
                    <div class="header-card">
                        <h3>Empresas Pendentes </h3>
                        <i id="empresas" class="fa-solid fa-building"></i>
                    </div>
                    <h2>
                        <?= $n_pendenteEmpresa ?>
                    </h2>
                </div>
                </a>
            </div>
            <section class="dash-card">
                <img class="grafico1" src="img/grafico1.png" alt="">
                <img class="grafico2" src="img/grafico2.png" alt="">
            </section>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>