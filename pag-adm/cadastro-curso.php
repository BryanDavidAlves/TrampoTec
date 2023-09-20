<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
                <i id="icon-titulo" class="fa-solid fa-chevron-left" style="color: #ffffff;"></i>
                <h2>Cadastrar um novo curso</h2>
            </a>
        </div>
    </header>
    <main>
        <section class="formulario-etec">
            <form action="" method="post">

                <div class="input-box">
                    <label for="nome">NOME DO CURSO</label>
                    <input type="text" id="nomeCuso" name="nomeCuso">
                </div>
                <div>
                    <div class="align-list">
                        <section id="btn1" class="secao-adicionar">
                            <i id="icon-adicionar" class="fa-solid fa-plus" style="color: #ffffff;"></i>
                            <h3>Adicionar Requisitos</h3>
                        </section>
                        <ul>
                            <li>
                                aa
                            </li>
                            <li>
                                aa
                            </li>
                            <li>
                                aa
                            </li>
                            <li>
                                aa
                            </li>
                        </ul>
                    </div>
                    <div class="align-list">
                        <section id="btn2" class="secao-adicionar">
                            <i id="icon-adicionar" class="fa-solid fa-plus" style="color: #ffffff;"></i>
                            <h3>Adicionar Áreas</h3>
                        </section>
                        <ul>
                            <li>
                                aa
                            </li>
                            <li>
                                aa
                            </li>
                            <li>
                                aa
                            </li>
                            <li>
                                aa
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                /*if (isset($_GET['cadastro']) && $_GET['cadastro'] == "feito") {
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
                }*/
                ?>

                <input type="submit" class="btn" value="CADASTRAR">
            </form>
        </section>
    </main>
    <dialog id="modalRequisitos">
        <form action="">
            Requisitos
            <input type="text">
            <input type="submit" value="Salvar">
        </form>

    </dialog>

    <dialog id="modalArea">
    <form action="">
            Area
            <input type="text">
            <input type="submit" value="Salvar">
        </form>
    </dialog>

    <script src="modal-etec.js"></script>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script>
        var button1 = document.getElementById("btn1")
        var button2 = document.getElementById("btn2")

        var modalArea = document.getElementById("modalArea")
        var modalRequisitos = document.getElementById("modalRequisitos")
        button1.onclick = function () {
            modalRequisitos.showModal()
        }
        button2.onclick = function () {
            modalArea.showModal()
        }

    </script>
</body>

</html>