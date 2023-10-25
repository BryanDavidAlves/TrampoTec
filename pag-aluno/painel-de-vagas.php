<?php
require_once "./back-end/login/validador_acesso.php";
include '../dao/conexao.php';

$querySelect ="SELECT tb_vaga.idVaga, tb_vaga.nome, tb_vaga.cidade, tb_vaga.bairro, tb_vaga.tipoTrabalho, tb_vaga.salario, tb_curso.nome,   tb_vaga.periodo, tb_vaga.area,  tb_vaga.descricao, tb_vaga.inicio, tb_vaga.termino  
FROM tb_vaga
INNER JOIN tb_curso
ON tb_vaga.fk_idCurso = tb_curso.idCurso";

$query = $conexao->query($querySelect);
$resultado = $query->fetchAll();



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Pagina de Vagas</title>
    
    <style>
        .box{
            display: flex;
            justify-content: space-between;
            width: 50%;

        }
    .align-cards {
    display: flex;
    width: 720px;
    flex-wrap: wrap;
    gap: 60px;
    justify-content: start;
    flex-direction: row;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.card {
  width: 250px;
  height: 280px;
  background: rgb(39, 39, 39);
  border-radius: 12px;
  box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.123);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  transition-duration: .5s;
  margin-left: 8%;
  margin-top: 8%;
}
.circle {
    margin-left: 20%;
    margin-top: 20%;
  background-color: #aaa;
  border-radius: 50%;
  width: 150px;
  height: 150px;
  overflow: hidden;
  position: relative;
}

.circle img {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100%;
}
a{
    margin-top: 3%;
    margin-left: 26%;
}


    </style>
</head>

<body>

    <?php
    include('../pag-aluno/components/header.php');
    ?>
 

        <div class="box">


            <!-- <section class="filtro">
                <form action="">
                    <span class="icone-filtro">
                        <i class="fa-solid fa-sliders" style="color: #0a3580;"></i>
                        <h4>Filtrar por</h4>
                    </span>

                    <span class="option-filter">
                        <label for="periodo">Período:</label>
                        <select name="periodo" id="periodo">
                            <option value="">Manhã</option>
                            <option value="">Tarde</option>
                            <option value="">Noite</option>
                        </select>
                    </span> -->
                    <!--<span class="option-filter">
                            <label>Horário</label>
                            <select name="periodo" id="periodo">
                                <option selected value="">Manhã</option>
                                <option value="">Tarde</option>
                                <option value="">Noite</option>
                            </select>
                        </span>-->
                    <!-- <span class="option-filter">
                        <label>Curso:</label>
                        <select class="option-curso" name="" id="">
                            
                            <option value="">Desenvolvimento de Sistemas</option>
                            <option value="">Administração</option>
                            <option value="">Nutrição</option>
                        </select>
                    </span>
                    <span class="option-filter">
                        <label>Área:</label>
                        <select name="" id="">
                            
                            <option value="">Area 1</option>
                            <option value="">Area 2</option>
                            <option value="">Area 3</option>
                        </select>
                    </span>
                    <span class="option-filter">
                        <label>Salário:</label>
                        <select name="" id="">
                            
                            <option value="">500,00 R$ - 1000,00 R$</option>
                            <option value="">1000,00 R$ - 1500,00 R$</option>
                            <option value="">1500,00 R$ - 2000,00 R$</option>
                        </select>
                    </span> -->
                    <!-- <input class="btn-filtro" type="submit" name="" id="">
                </form>
            </section> -->
            <section class="container">
                <section class="perfil">
                <div class="circle">
                <img src="./img/img-perfil.jpg">
                </div>
                    <a href="perfil.php">PERFIL</a>
                </section>
                    <div class="align-cards">
                        <?php foreach($resultado as $resultado) { ?> 
                        <div class="cards">
                            <div class="localidade">
                                <h4><?=$resultado[2]?></h4>
                                <h4><?=$resultado[3]?></h4>
                            </div>
                            <h4><?=$resultado[6]?></h4>
                            <h4><?=$resultado[4]?></h4>
                            <h4>R$<?=$resultado[5]?></h4>
                            <button id="btn1">Clique para mais informações</button>

                        </div>
                        <?php  } ?>
                    </div>

            </section>
            </div>
        </div>


    <dialog id="modal">
        <section class="container-modal">
            <div class="header-modal">
                <button id="closeModal">
                    <i class="fa-solid fa-xmark" style="color: #ff0000;"></i>
                </button>
            </div>
            <section class="info-empresa">
                <div class="div-img-modal">
                    <img class="img-modal" src="img/nuts.png" alt="">
                </div>
                <div class="sobre-empresa">
                    <h2>Nuts</h2>
                    <h3>EmpresaTecnologica</h3>
                    <h4>Desde 2023</h4>
                </div>
            </section>
            <div class="sobre-vaga">
                <section class="conhecimento">
                    <h2>CONHECIMENTOS</h2>
                    <ul>
                        <li>JAVA</li>
                        <li>PHP</li>
                        <li>HTML</li>
                    </ul>
                </section>
                <section class="desc-vaga">
                    <h2>ESTÁGIO BACK END</h2>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab magni reiciendis, reprehenderit
                            assumenda aliquid aut alias eligendi delectus harum quisquam maxime voluptates nulla illum.
                            Iste deleniti libero nulla quidem? Ut?</p>
                    </div>
                </section>
            </div>
            <button id="btn" onclick="openModal()">CANDIDATAR-SE</button>
        </section>
    </dialog>

    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>

    <script src="js/modal-vagas.js"></script>
    <script>
        var closeModal = document.getElementById("closeModal")
        closeModal.onclick = function () {
            modal.close()
        }
    </script>
</body>

</html>