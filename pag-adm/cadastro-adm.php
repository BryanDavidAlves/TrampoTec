<?php
require_once "back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/cadastro-adm.css">
    <title>TrampoTec - Cadastro Adm</title>

    <style>
        /* Estilos para o modal e overlay */
        #modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        /* Estilos para o botão de fechar */
        #closeBtn {
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
        }

        #modal2 {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        #overlay2 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        /* Estilos para o botão de fechar */
        #closeBtn2 {
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>
    <header>
        <div class="secao-cadastro">
            <a href="adm.php">
                <i id="icon-titulo" class="fa-solid fa-chevron-left"></i>
                <h2>Cadastrar um novo Administrador</h2>
            </a>
        </div>
    </header>
    <main>
        <div id="overlay"></div>

        <!-- Modal -->
        <div id="modal">
            <span id="closeBtn" onclick="fecharModal()">&times;</span>
            <p>Cadastro realizado com sucesso!!</p>
            <button onclick="fecharModal()">OK</button>
        </div>
        <div id="overlay2"></div>

        <!-- Modal -->
        <div id="modal2">
            <h4>Atenção</h4>
            <span id="closeBtn2" onclick="fecharModal2()">&times;</span>
            <p>Cadastro com erro, tente novamente</p>
            <button onclick="fecharModal2()">OK</button>
        </div>
        <section class="formulario-adm">
            <form action="back-end/cadastro/salvarCadastro.php" method="post">

                <div class="input-box">
                    <input type="text" id="nome" name="nome" required>
                    <label class="label-anim" for="nome">NOME</label>
                </div>
                <div class="input-box">
                    <input type="email" id="email" name="email" required>
                    <label class="label-anim" for="nome">EMAIL</label>
                </div>
                <div class="input-box">
                    <input type="password" id="senha" name="senha" required>
                    <label class="label-anim" for="nome">SENHA</label>
                </div>


                <input type="submit" class="btn" value="CADASTRAR">
            </form>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <script type="text/javascript">
        $("#telefone, #celular").mask("(00) 0000-0000");
    </script>
    <script>
        // Função para abrir o modal
        function abrirModal() {
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('modal').style.display = 'block';
        }

        // Função para fechar o modal
        function fecharModal() {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('modal').style.display = 'none';
        }

        // Verificar se o CPF já está cadastrado via GET
        let urlParams = new URLSearchParams(window.location.search);
        let cadastro = urlParams.get('cadastro');

        if (cadastro === 'true') {
            abrirModal();
        }
    </script>
    <script>
        // Função para abrir o modal
        function abrirModal2() {
            document.getElementById('overlay2').style.display = 'block';
            document.getElementById('modal2').style.display = 'block';
        }

        // Função para fechar o modal
        function fecharModal2() {
            document.getElementById('overlay2').style.display = 'none';
            document.getElementById('modal2').style.display = 'none';
        }

        // Verificar se o CPF já está cadastrado via GET
        let urlParamss = new URLSearchParams(window.location.search);
        let cadastroErro = urlParamss.get('cadastroErro');

        if (cadastroErro === 'false') {
            abrirModal2();
        }
    </script>
</body>

</html>