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
    <link rel="stylesheet" href="css/adm.css">

    <title>Etecs</title>
</head>

<body>
    <?php
    include('../pag-adm/components/sidebar-adm.php');
    ?>

    <header>
        <h1>Administradores</h1>
        <input type="text" placeholder="Pesquisar">
    </header>
    <main>

        <section class="administradores">

            <div class="align-card">
                <section class="card">
                    <div class="itens-card">
                        <img class="img-adm" src="img/img-perfil.jpg" alt="">
                        <div class="info">
                            <span>
                                <h3>Nome:</h3>
                                <p>Aline</p>
                            </span>
                            <span>
                                <h3>Email:</h3>
                                <p>aline.souza@etec.sp.gov.br</p>
                            </span>
                            <span>
                                <h3>Telefone:</h3>
                                <p>(11) 9 9979-9978</p>
                            </span>
                            <span>
                                <h3>Senha:</h3>
                                <p>Aline@123</p>
                            </span>
                        </div>
                    </div>
                    <i class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i>
                </section>

                <section class="card">
                    <div class="itens-card">
                        <img class="img-adm" src="img/img-perfil.jpg" alt="">
                        <div class="info">
                            <span>
                                <h3>Nome:</h3>
                                <p>Aline</p>
                            </span>
                            <span>
                                <h3>Email:</h3>
                                <p>aline.souza@etec.sp.gov.br</p>
                            </span>
                            <span>
                                <h3>Telefone:</h3>
                                <p>(11) 9 9979-9978</p>
                            </span>
                            <span>
                                <h3>Senha:</h3>
                                <p>Aline@123</p>
                            </span>
                        </div>
                    </div>
                    <i class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #a1a1a1;"></i>
                </section>
                

                
            </div>
            <section class="filtro">
                <a class="cadastrar" href="cadastro-adm.php">
                    <i id="iconeAdd" class="fa-solid fa-plus" style="color:#fff;"></i>
                    <h2>Novo Cadastro</h2>
                </a>

                <div class="align">
                    <span class="material-symbols-outlined">
                        tune
                    </span>
                    <h3 class="titulo-filtro">Filtrar por</h3>
                </div>
                <form action="">
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
                        <h3 class="palavra-chave">Email</h3>
                        <select name="select">
                            <option value="valor1"> </option>
                            <option value="valor1">Valor 1</option>
                            <option value="valor2">Valor 2</option>
                            <option value="valor3">Valor 3</option>
                        </select>
                    </div>
                    <div class="align">
                        <h3 class="palavra-chave">Código Etec</h3>
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
                    <input value="Aplicar" class="button" type="submit">
                </form>
                </div>
            </section>


        </section>

    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>