<?php
require_once "./beck-end/login/validador_acesso.php";
include "../dao/conexao.php";
$idvaga = trim($_POST['idVaga']);
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

$querySelect = "SELECT  tb_vaga.* , tb_vaga_aluno.* , tb_aluno.*
FROM tb_aluno
INNER JOIN tb_vaga_aluno ON tb_vaga_aluno.fk_idAluno = tb_aluno.idAluno
INNER JOIN tb_vaga ON tb_vaga.idVaga = tb_vaga_aluno.fk_idVaga
WHERE idVaga ='$idvaga' AND aprovado = 1";

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
                        <h5>Nome da vaga:</h5><?=$vaga['nome']?>
                    </div>
                    <div class="itens-card">
                        <h5>Requisitos:</h5> <?=$vaga['requisito']?>
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
                        <div class="align-links">
                        <a href="vagas-candidato.php?aprovado=1">
                            CADASTRADAS
                        </a>
                        <a href="vagas-candidato.php?aprovado=0">
                            PENDENTES
                        </a>
                        </div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USUARIO</th>
                            <th>NOME</th>
                            <th>EMAIL</th>
                        </tr>
                    </thead>
                    <tbody class="infos" id="result">

                    <?php foreach ($aluno as $aluno) {?>
                            <tr class="infos">
                                <td>
                                    <?=$aluno[17]?>
                                </td>
                                <td>
                                    <div class="container-perfil">
                                        <div class="img-perfil">
                                            <img src="../pag-aluno/fotosAluno/perfil/<?=$aluno[30] != "" ? $aluno[30] : '';?>" alt="">
                                        </div>

                                </td>
                                <td class="nome-aluno">
                                    <?=$aluno[20]?>
                                </td>
                                <td>
                                    <?=$aluno[18]?>
                                </td>




                            </tr>

                        <?php }?>



                    </tbody>
                </table>
            </div>
        </div>




    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>


        $(document).ready(function() {

           <?php if (isset($_GET['aprovado']) && $_GET['aprovado'] == "1") {?>

                 $.post('./beck-end/buscaAluno/buscaAluno1.php',
                 function(data) {
                    $("#result").html(data);
                });


      <?php }?>
      <?php if (isset($_GET['aprovado']) && $_GET['aprovado'] == "0") {?>


                $.post('./beck-end/buscaAluno/buscaAluno.php',
                 function(data) {
                    $("#result").html(data);
                });


      <?php }?>


        });
    </script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>