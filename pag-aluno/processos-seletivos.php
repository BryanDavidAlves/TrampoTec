<?php
include '../dao/conexao.php';

require_once "./back-end/login/validador_acesso.php";

$cliente_id = $_SESSION['idAluno'];

$querySelect = "SELECT  tb_vaga.* , tb_vaga_aluno.* , tb_aluno.*
FROM tb_vaga
INNER JOIN tb_vaga_aluno ON tb_vaga_aluno.fk_idVaga = tb_vaga.idVaga
INNER JOIN tb_aluno ON tb_aluno.idAluno = tb_vaga_aluno.fk_idAluno
WHERE tb_aluno.idAluno= '$cliente_id'


";

$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">

    <link rel="stylesheet" href="../pag-aluno/css/processo-seletivo.css">
    <title>Processos Seletivos</title>
    <style>
        .container {
      margin-top: 30px;
    }

    .table {
      margin-top: 20px;
    }

    select {
      width: 100%;
    }

    h5 {
        text-align: center;
       font-weight: bold;
       margin-top: 5%;
     
    }
    </style>
</head>

<body>
    <?php
    include('../pag-aluno/components/header.php');
    ?>
    <main id="main">

        <div class="box">
                <section class="filtro">
                    <div class="container mt-4">
        <h5>Filtre por:</h5>

<<<<<<< HEAD
        <div class="row" style="margin-top: 2%;">
            <div class="col-md-3">
            <select id="periodo" class="form-control">
                <option value="">Período</option>
                <option value="manha">Manhã</option>
                <option value="tarde">Tarde</option>
                <option value="noite">Noite</option>
            </select>
            </div>
            <div class="col-md-3">
            <select id="curso" class="form-control">
                <option value="">Curso</option>
                <option value="engenharia">Engenharia</option>
                <option value="medicina">Medicina</option>
                <option value="direito">Direito</option>
            </select>
            </div>
            <div class="col-md-3">
            <select id="area" class="form-control">
                <option value="">Área</option>
                <option value="ti">TI</option>
                <option value="saude">Saúde</option>
                <option value="juridico">Jurídico</option>
            </select>
            </div>
            <div class="col-md-3">
            <select id="salario" class="form-control">
                <option value="">Salário</option>
                <option value="menos-de-2000">Menos de R$ 2.000</option>
                <option value="2000-4000">R$ 2.000 - R$ 4.000</option>
                <option value="mais-de-4000">Mais de R$ 4.000</option>
            </select>
            </div>
        </div>
        </div>


=======
                        <span class="option-filter">
                            <label for="periodo">Período:</label>
                            <select name="periodo" id="periodo">
                                <option selected value="">Qualquer</option>
                                <option value="">Manhã</option>
                                <option value="">Tarde</option>
                                <option value="">Noite</option>
                            </select>
                        </span>
                        <!--<span class="option-filter">
                            <label>Horário</label>
                            <select name="periodo" id="periodo">
                                <option selected value="">Manhã</option>
                                <option value="">Tarde</option>
                                <option value="">Noite</option>
                            </select>
                        </span>-->
                        <span class="option-filter">
                            <label>Curso:</label>
                            <select class="option-curso" name="" id="">
                                <option selected value="">Qualquer</option>
                                <option value="">Desenvolvimento de Sistemas</option>
                                <option value="">Administração</option>
                                <option value="">Nutrição</option>
                            </select>
                        </span>
                        <span class="option-filter">
                            <label>Área:</label>
                            <select name="" id="">
                                <option selected value="">Qualquer</option>
                                <option value="">Area 1</option>
                                <option value="">Area 2</option>
                                <option value="">Area 3</option>
                            </select>
                        </span>
                        <span class="option-filter">
                            <label>Salário:</label>
                            <select name="" id="">
                                <option selected value="">Qualquer</option>
                                <option value="">500,00 R$ - 1000,00 R$</option>
                                <option value="">1000,00 R$ - 1500,00 R$</option>
                                <option value="">1500,00 R$ - 2000,00 R$</option>
                            </select>
                        </span>
                        <input class="btn-filtro" type="submit" name="" id="">
                    </form>
                </section>
                <?php foreach ($resultado as $resultado) {?>
                <section class="vagas">
                    <section class="container-cards">
                        <div class="cards">
                            <div class="localidade">
                                <h4><?=$resultado[9]?></h4>
                                <h4><?=$resultado[10]?></h4>
                            </div>
                            <h4 class="nome-vaga"><?=$resultado[1]?></h4>
                            <h4><?=$resultado[5]?></h4>
                            <h4><?=$resultado[6]?></h4>

                        </div>
                                    </section>
                </section>
                <?php }?>
>>>>>>> 8e6e62fb64ec315ec3714dc561a9171fbed633ee
   
        </div>

    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>