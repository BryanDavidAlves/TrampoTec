<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pag-aluno/components/component-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/painel-vagas.css">
    
    <title>Document</title>
</head>
<body>
        <?php 
            include('../pag-aluno/components/header.php');
        ?>
        <h1>PAINEL DE VAGAS</h1>
        <section class="vagas">
            <div class="perfil">
                <img src="img/img-perfil.jpg" alt="">
                <h3>PERFIL</h3>
            </div>

            <div class="container-cards">
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
            </div>
            <div>
                <i class="fa-solid fa-filter-list"></i>
                <h3>Filtrar por</h3>
                <h3>NOME</h3>
                <h3>Curso</h3>
                <h3>palavra chave</h3>
            </div>
        </section>
        
        <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>
</html>