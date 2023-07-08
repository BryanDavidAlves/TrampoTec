<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pag-aluno/components/component-aluno.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> <!--link icone filtro-->
    <link rel="stylesheet" href="../pag-aluno/css/painel-de-vagas.css">
    
    <title>Pagina de Vagas</title>
</head>
<body>
        <?php 
            include('../pag-aluno/components/header.php');
        ?>
        <h1>PAINEL DE VAGAS</h1>
        <section class="vagas">
           
                    <img src="img/img-perfil.jpg" alt="">

            <section class="container-cards">
                <div class="cards">
                    <div class="localidade">
                        <h4>SÃO PAULO - SP</h4>
                        <h4>TATUAPÉ</h4>
                    </div>
                    <h4>Desenvolvedor Front End Junior</h4>
                    <h4>Presencial</h4>
                    <h4>R$2.520,00</h4>
                    <button>Clique para mais informações</button>
                </div>
            </section>

            <section class="filtro">
            <div class="align">
            <span class="material-symbols-outlined">
            tune
            </span>
                <h3 class="titulo-filtro">Filtrar por</h3>
                </div>
                <div class="align">
                <h3 class="palavra-chave">Nome</h3>
                    <select name="select">
                        <option value="valor1"> </option>
                        <option value="valor1">Valor 1</option>
                        <option value="valor2">Valor 2</option>
                        <option value="valor3">Valor 3</option>
                    </select>
                </div>
                <div class="align">
                <h3 class="palavra-chave">Curso</h3>
                    <select name="select">
                        <option value="valor1"> </option>
                        <option value="valor1">Valor 1</option>
                        <option value="valor2">Valor 2</option>
                        <option value="valor3">Valor 3</option>
                    </select>
                </div>
                <div class="align">
                <h3 class="palavra-chave">Palavra <br> chave</h3>
                <select name="select">
                        <option value="valor1"> </option>
                        <option value="valor1">Valor 1</option>
                        <option value="valor2">Valor 2</option>
                        <option value="valor3">Valor 3</option>
                    </select>
                </div>
                <button>Aplicar</button>
            </div>
        </section>
        
        <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>
</html>