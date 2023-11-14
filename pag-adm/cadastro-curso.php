<?php
require_once "back-end/login/validador_acesso.php";
include ('../dao/conexao.php');
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



if($_POST) {
    $id_curso = $_POST['id_curso'];
    $querySelect = "SELECT * FROM tb_curso  WHERE idCurso = $id_curso";
    $resultado = $conexao->query($querySelect);
    $curso = $resultado->fetch();
    $id_curso = $curso["idCurso"];
    $nome = $curso["nome"];
    $cargaHoraria = $curso["cargaHoraria"];
    $semestre = $curso["semestre"];
    $modalidade = $curso["modalidade"];
    $ensino = $curso["ensino"];
    $querySelect = "SELECT * FROM tb_eixo  WHERE fk_idCurso = $id_curso";
    $resultado = $conexao->query($querySelect);
    $eixo = $resultado->fetch();
    $eixo1 = $eixo["eixo"];
    

  }else{
    $id_curso = "";
    $nome = "";
    $cargaHoraria = "";
    $semestre = "";
    $modalidade = "";
    $ensino = "";
    $eixo1 = "";
  }

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
                <i id="icon-titulo" class="fa-solid fa-chevron-left"></i>
                <h2>Cadastrar um novo curso</h2>
            </a>
        </div>
    </header>
    <main>
        <section class="formulario-etec">
            <form action="back-end/cadastro/salvarCadastroCurso.php" method="post" id="meuFormulario">

                <div class="input-box">
                    
                    <input type="text" id="nomeCuso" name="nomeCuso"  value="<?=$nome?>" required>
                    <label class="label-anim" for="nome">NOME DO CURSO</label>
                </div>

                <div class="input-box">
                    
                    <input type="text" id="eixo" name="eixo"  value="<?=$eixo1?>" required>
                    <label class="label-anim" for="eixo">EIXO</label>
                </div>
                <div class="input-select">
                    <h3 class="sub-form">Informaçoes Adicionais</h3>
                    <select type="text" id="cargaHoraria" name="cargaHoraria"  value="<?=$cargaHoraria?>" required>
                       
                        <option>1200 horas</option>
                        <option>1600 horas</option>
                        <option>800 horas</option>
                     
                    </select>
                    <select type="text" id="semestre" name="semestre"  value="<?=$semestre?>" required>
                        <option>1º semestre</option>

                        <option>2º semestre</option>

                        <option>3º semestre</option>
                        <option>4º semestre</option>
                        <option>5º semestre</option>
                        <option>6º semestre</option>
                    </select>
                    <select type="text" id="modalidade" name="modalidade"  required>
                        <option>Modalidade</option>         
                        <option  <?=$modalidade=='Presencial'?'selected':''?>>Presencial</option>
                        <option  <?=$modalidade=='Online'?'selected':''?>>Online</option>


                    </select>
                    <select type="text" id="modalidade" name="ensino" required>
                        <option >Ensino</option>
                        <option  <?=$ensino=='Curso Tecnico'?'selected':''?>>Curso Tecnico</option>
                        <option  <?=$ensino=='Ensino Medio Integrado ao Tecnico(M-TEC)'?'selected':''?>>Ensino Medio Integrado ao Tecnico(M-TEC)</option>
                        <option <?=$ensino=='Ensino Medio Integrado ao Tecnico em Periodo Integral(M-TEC-Pi)'?'selected':''?>>Ensino Medio Integrado ao Tecnico em Periodo Integral(M-TEC-Pi)</option>
                        <option  <?=$ensino=='Ensino Medio Integrado ao Tecnico em Periodo Noturno(M-TEC-N)'?'selected':''?>>Ensino Medio Integrado ao Tecnico em Periodo Noturno(M-TEC-N)</option>
                        <option <?=$ensino=='Articulação dos Ensino Medio - Técnico e Superior (AMS)'?'selected':''?>>Articulação dos Ensino Medio - Técnico e Superior (AMS)</option>        
                        <option <?=$ensino=='Especialização Técnica'?'selected':''?>>Especialização Técnica</option>


                    </select>
                </div>


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
                 <?php
                if (isset($_GET['cadastro']) && $_GET['cadastro'] == "atualizado") {
                ?>
                    <div class="text-green">
                        Cadastro Atualizado
                    </div>
                <?php
                }
                ?>
                <input type="hidden" id="id_curso" name="id_curso" value="<?=$id_curso?>">
                <input type="submit" class="btn" value="CADASTRAR">
            </form>
        </section>
    </main>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const formulario = document.getElementById("meuFormulario");
            const camposContainer = document.getElementById("campos");
            const adicionarCampoButton = document.getElementById("adicionarCampo");

            let contadorCampos = 0;

            adicionarCampoButton.addEventListener("click", function() {
                contadorCampos++;

                const novoCampo = document.createElement("input");
                novoCampo.type = "text";
                novoCampo.name = `campo${contadorCampos}`;
                novoCampo.placeholder = `Requisito ${contadorCampos}`;
                camposContainer.appendChild(novoCampo);
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const formulario = document.getElementById("meuFormulario");
            const camposContainer = document.getElementById("area");
            const adicionarCampoButton = document.getElementById("adicionarArea");

            let contadorArea = 0;

            adicionarCampoButton.addEventListener("click", function() {
                contadorArea++;

                const novoArea = document.createElement("input");
                novoArea.type = "text";
                novoArea.name = `area${contadorArea}`;
                novoArea.placeholder = `Area ${contadorArea}`;
                camposContainer.appendChild(novoArea);
            });
        });
    </script>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>