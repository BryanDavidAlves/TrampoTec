<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> <!--link icone filtro-->
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/component-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/curriculo.css">
    <title>Meu Curriculo</title>
</head>
<body>
        <?php 
            include('../pag-aluno/components/header.php');
        ?>
        <?php 
            include('../pag-aluno/components/sidebar.php');
        ?>
        
            <h1>CURRICULO</h1>

            <section class="infos">

            <section class="info-pessoal">
                <h2>INFORMAÇÕES PESSOAIS</h2>
                <div class="one-bar">
                    <h3>NOME:</h3>
                    <h4>Bryan Lindo da Silva</h4>
                </div>

                <div class="one-bar">
                    <h3>EMAIL:</h3>
                    <h4>bryanlindo@gmail.com</h4>
                </div>

                <div class="two-bars">

                    <div class="bar">
                        <h3>CEP:</h3>
                        <h4>308900-410</h4>
                    </div>

                    <div class ="bar">
                        <h3>TELEFONE:</h3>
                        <h4>(11) 94002-8922</h4>
                    </div>

                </div>

                <div class="one-bar">
                    <h3>DATA DE NASCIMENTO:</h3>
                    <h4>29/01/2004</h4>
                </div>
                <button>ALTERAR</button>
            </section>

            <section class="info-academica">
                <h2>INFORMAÇÕES PESSOAIS</h2>
                <div class="one-bar">
                    <h3>CURSO:</h3>
                    <h4>Desenvolviento de Sistemas</h4>
                </div>

                <div class="two-bars">

                    <div class="bar">
                        <h3>Druração:</h3>
                        <h4>18 meses</h4>
                    </div>

                    <div class ="bar">
                        <h3>PERÍODO:</h3>
                        <h4>Vespertino</h4>
                    </div>

                </div>

                <div class="one-bar">
                    <h3>INSTITUIÇÃO:</h3>
                    <h4>Etec de Guaianases</h4>
                </div>

                <div class="one-bar">
                    <h3>CONCLUSÃO:</h3>
                    <h4>12/2023</h4>
                </div>
                <div class="one-bar">
                    <h3>MATRICULA:</h3>
                    <h4>290552</h4>
                </div>
            </section>
        </section>

</body>
</html>