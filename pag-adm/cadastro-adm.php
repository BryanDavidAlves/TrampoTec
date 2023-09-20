
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/cadastro-adm.css">
    <title>TrampoTec - Cadastro Adm</title>
</head>

<body>
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>
    <header>
        <div class="secao-cadastro">
            <a href="adm.php">
            <i id="icon-titulo" class="fa-solid fa-chevron-left" style="color: #ffffff;"></i>
                <h2>Cadastrar um novo Administrador</h2>
            </a>
        </div>

        <section class="formulario-adm">
            <form action="back-end/cadastro/salvarCadastro.php" method="post">
                <div class="input-box">
                    <label for="nome">NOME</label>
                    <input type="text" id="nome" name="nome">
                </div>
                <div class="input-box">
                    <label for="nome">EMAIL</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="input-box">
                    <label for="nome">SENHA</label>
                    <input type="password" id="senha" name="senha">
                </div>
                <?php 
                            if(isset($_GET['cadastro']) && $_GET['cadastro'] == "feito"){
                            ?>
                            <div class="text-green">
                               Cadastro Realizado
                            </div> 
                            <?php  
                            }
                            ?>
                             <?php 
                            if(isset($_GET['cadastro']) && $_GET['cadastro'] == "erro"){
                            ?>
                            <div class="text-danger">
                               Cadastro com erro
                            </div> 
                            <?php  
                            }
                            ?>
                
                <input type="submit" class="btn" value="CADASTRAR">
            </form>
        </section>

        <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

        <script type="text/javascript">
            $("#telefone, #celular").mask("(00) 0000-0000");
        </script>
</body>

</html>