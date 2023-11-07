<?php
require_once "./beck-end/login/validador_acesso.php";
include "../dao/conexao.php";
$idvaga = trim($_POST['idVaga']);
echo $idvaga;
$info = "SELECT tb_vaga.cidade, tb_vaga.area, tb_vaga.periodo, tb_vaga.bairro, tb_vaga.idVaga,
 tb_vaga.nome, tb_vaga.descricao ,  tb_vaga.salario, tb_curso.nome AS curso,tb_empresa.nome AS empresa, tb_empresa.imagem,
 tb_requisito.requisito
FROM tb_vaga
INNER JOIN tb_curso
ON tb_vaga.fk_idCurso = tb_curso.idCurso
INNER JOIN tb_empresa
ON tb_vaga.fk_idEmpresa = tb_empresa.idEmpresa

INNER JOIN tb_requisito_vaga
on tb_vaga.idVaga = tb_requisito_vaga.fk_idVaga
INNER JOIN tb_requisito
ON tb_requisito_vaga.fk_idRequisito = tb_requisito.idRequisito WHERE idVaga ='$idvaga'";

$querySelect = "SELECT * FROM tb_aluno"; /* tb_vaga.idVaga AS vaga,tb_vaga_aluno.fk_idAluno  AS aluno, tb_aluno.nome,tb_aluno.imagem,tb_aluno.idAluno,tb_aluno.email

FROM tb_vaga
INNER JOIN tb_vaga
ON tb_vaga_aluno.fk_idVaga=tb_vaga.idVaga

INNER JOIN tb_aluno
on  tb_aluno.idAluno=tb_vaga_aluno.fk_idAluno
WHERE idVaga= '$idvaga'";*/
$resultado = $conexao->query($querySelect);
$aluno = $resultado->fetchAll();
$result = $conexao->query($info);

$vagas = array();
foreach ($result as $vaga) {
    $vagaId = $vaga['idVaga'];
    if (!isset($vagas[$vagaId])) {
        $vagas[$vagaId] = array(
            'nome' => $vaga['nome'],
            'descricao' => $vaga['descricao'],
            'curso' => $vaga['curso'],

            'salario' => $vaga['salario'],
            'empresa' => $vaga['empresa'],
            'imagem' => $vaga['imagem'],

            'requisito' => $vaga['requisito'],
            'cidade' => $vaga['cidade'],
            'idVaga' => $vaga['idVaga'],
            'bairro' => $vaga['bairro'],
            'area' => $vaga['area'],
            'periodo' => $vaga['periodo'],

        );
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
    <link rel='stylesheet' href='../pag-empresa/css/vagas.css'>
    <link rel='stylesheet' href='../pag-empresa/css/candidato-vaga.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>TrampoTec</title>
</head>

<body>

<?php include '../pag-empresa/componentes/sidebar.php'?>
    <?php include '../pag-empresa/componentes/email.php'?>
    <?php include '../pag-empresa/componentes/notificacao.php'?>


    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">
    <main class="main">


    <div class="align-itens">







        <?php foreach ($vagas as $vaga) {?>
            <div class="card">
            <div class="itens-card">

                            <h5>Nome da empresa:</h5><?=$vaga['empresa']?>
                            </div>

                            <div class="itens-card">
                            <h5>Requisitos:</h5> <?=$vaga['requisito']?>
                            </div>
                            <div class="itens-card"><h5>Nome da vaga:</h5><?=$vaga['nome']?>
                            </div>

                            <div class="itens-card">
                            <h5>Descrição da vaga:</h5><?=$vaga['descricao']?>
                            </div>
                            <div class="itens-card">
                            <h5>Cursos da vaga:</h5><?=$vaga['curso']?>
                            </div>

                            <div class="itens-card">
                            <h5>Salario:</h5><?=$vaga['salario']?>
                            </div>
                            </div>

        <?php }?>


<div class="tabela">
   <p>CANDIDATOS A VAGA</p>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>USUARIO</th>
            <th>NOME</th>
            <th>EMAIL</th>




        </tr>
    </thead>
    <tbody>
        <?php foreach ($aluno as $aluno) {?>
            <tr class="infos">
                <td>
                    <?=$aluno[0]?>
                </td>
                <td>
                <div class="container-perfil">
                <div class="img-perfil">
                    <img src="../pag-aluno/fotosAluno/perfil/<?=$aluno[13] != "" ? $aluno[13] : '';?>" alt="">
                </div>

                </td>
                <td class="nome-aluno">
                    <?=$aluno[3]?>
                </td>
                <td>
                    <?=$aluno[1]?>
                </td>




            </tr>

        <?php }?>

    </tbody>
</table>
</div>
</div>


        <!--
                <dialog id="vermais" class="ver-mais">

            <div class="vermais-body">
                <span class="ver-fechar"><i onclick="vermais()" class="fa-solid fa-circle-xmark"></i></span>
                <div class="vermais-align">

                    <div class="vermais-infos">
                        <h3>Descricao:</h3>
                        <p id="descricao">

                        </p>
                    </div>

                    <div class="vermais-infos">
                        <h3>Requisito:</h3>

                        <p>

                        </p>
                    </div>



                </div>


            </div>
        </dialog>
    -->



    </main>
    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>