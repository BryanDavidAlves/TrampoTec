<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="components/component-adm.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>
    <header>
        <h1>Dashboard</h1>
    </header>
    <main>
        <section class="dashboard">

            <div class="align-card">
                <div class="card">
                    <div class="header-card">
                        <h3>Empresas cadastradas </h3>
                        <i id="empresas" class="fa-solid fa-building" style="color: #3C86D;"></i>
                    </div>
                    <h2>7</h2>
                </div>
                <div class="card">
                    <div class="header-card">
                        <h3>Professores cadastrados</h3>
                        <i id="prof" class="fa-solid fa-chalkboard-user" style="color: #3C86D;"></i>
                    </div>
                    <h2>7</h2>
                </div>
                <div class="card">
                    <div class="header-card">
                        <h3>Alunos cadastrados</h3>
                        <i id="aluno" class="fa-solid fa-user" style="color: #3C86D;"></i>
                    </div>
                    <h2>7</h2>
                </div>
                <div class="card">
                    <div class="header-card">
                        <h3>Etecs</h3>
                        <i id="etec" class="fa-solid fa-school" style="color: #3C86D;"></i>
                    </div>
                    <h2>7</h2>
                </div>
                <div class="card">
                    <div class="header-card">
                        <h3>Administradores Cadastrados</h3>
                        <i id="adm" class="fa-solid fa-user" style="color: #3C86D;"></i>
                    </div>
                    <h2>7</h2>
                </div>
                <div class="card">
                    <div class="header-card">
                        <h3>Etecs Pendentes</h3>
                        <i id="etec" class="fa-solid fa-school" style="color: #3C86D;"></i>
                    </div>
                    <h2>7</h2>
                </div>

                <div class="card">
                    <div class="header-card">
                        <h3>Empresas Pendentes </h3>
                        <i id="empresas" class="fa-solid fa-building" style="color: #3C86D;"></i>
                    </div>
                    <h2>7</h2>
                </div>
            </div>
            <section class="dash-card">
                <img class="grafico1" src="img/grafico1.png" alt="">
                <img class="grafico2" src="img/grafico2.png" alt="">
            </section>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>