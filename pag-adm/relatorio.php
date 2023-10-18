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
    <link rel="stylesheet" href="css/relatorio.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <main>
        <div class="align-busca">
            <a href=""><i class="fa-solid fa-chevron-left"></i></a>
            <div class="barra-pesquisa">
    <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i>
            <input  type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise aqui" >

            </div>
        </div>

        <section class="coluna-um">
            <div class="align-card">
            <a href="professor.php">
                    <div class="card">
                        <div class="header-card">
                            <h3>Professores cadastrados</h3>
                            <i id="prof" class="fa-solid fa-chalkboard-user" ></i>
                        </div>
                        <h2>
                            <?= $n_professor ?>
                        </h2>
                    </div>
                </a>

                <a href="professor.php">
                    <div class="card">
                        <div class="header-card">
                            <h3>Professores cadastrados</h3>
                            <i id="prof" class="fa-solid fa-chalkboard-user" ></i>
                        </div>
                        <h2>
                            <?= $n_professor ?>
                        </h2>
                    </div>
                </a>
                <a href="professor.php">
                    <div class="card">
                        <div class="header-card">
                            <h3>Professores cadastrados</h3>
                            <i id="prof" class="fa-solid fa-chalkboard-user" ></i>
                        </div>
                        <h2>
                            <?= $n_professor ?>
                        </h2>
                    </div>
                </a>
            </div>
            <div class="align-dados">
                <div class="dados-empresa">
                <p class="empresa-cadastrada">
                    Total de Empresa Cadastradas
                </p>
                <p class="dados">137</p>
                </div>
                <div class="dados-empresa">
                <p class="empresa-cadastrada">
                    Total de Empresa Cadastradas
                </p>
                <p class="dados">137</p>
                </div>
            </div>
        </section>
    </main>


    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>