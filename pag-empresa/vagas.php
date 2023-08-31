<?php
require_once "./beck-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
    <link rel='stylesheet' href='../pag-empresa/css/vagas.css'>
    <title>TrampoTec</title>
</head>

<body>

    <?php include('../pag-empresa/componentes/sidebar.php') ?>
    <?php include('../pag-empresa/componentes/email.php') ?>
    <?php include('../pag-empresa/componentes/notificacao.php') ?>

    <img class="cima" src="./img/fundo2.png" alt="">
    <img class="baixo" src="./img/fundo1.png" alt="">
    <main class="main">

<p>Vagas</p>

        <section class="sistema-busca">
            <div class="secao-busca">

                <span class="add-vaga"><a href="./cadastrar-vaga.php"><i class="fa-solid fa-circle-plus"></i></a> Cadastra Nova Vaga</span>
                <div class="barra-pesquisa">
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="">
                    <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #000000;"></i>
                </div>

                <div class="align-filtro">
                    <div class="filtro" onclick="abrirFiltro()">
                      <i class="fa-solid fa-filter"></i>
                        <span>Filtrar</span>

                    </div>
                </div>

                <div class="modal-filtro" id="abrir-filtro">
                    <form action="">
                        <div class="align-form-filtro">
                            <label for="">Periodo</label>
                            <input type="checkbox" name="" id="">
                        </div>
                  
                        <div class="align-form-filtro">
                            <label for="">Salario</label>
                            <input type="checkbox" name="" id="">
                        </div>
                        <div class="align-form-filtro">
                            <label for="">Vaga</label>
                            <input type="checkbox" name="" id="">
                        </div>
                        <?php
                    if (isset($_GET['login']) && $_GET['login'] == "senhaInvalida") {
                        ?>
                        <div class="text-danger">
                            Usuario ou senha Inválidos
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($_GET['login']) && $_GET['login'] == "naoaprovado") {
                        ?>
                        <div class="text-danger">
                            Cadastro Pendente
                        </div>
                    <?php
                    }
                    ?>
                        <input type="submit" value="Aplicar" class="button-filtro">

                    </form>
                </div>
            </div>
        </section>
        <section class="professor">

            <table >
                <thead>
                    <tr>
                   
                        <th>EMPRESA</th>
                        <th>VAGA</th>
                        <th>PERIODO</th>
                        <th>SALARIO</th>
                        <th>REQUISITO</th>
                    </tr>
                </thead>
                <tbody>
            
                    <tr class="infos">
                        <td class="table-nome-professor">Cysco Systen</td>
                        <td class="table-email-professor">Front-end</td>
                        <td class="table-cnpj">Manha</td>
                        <td class="table-cnpj">R$2000,00</td>
                        <td class="table-cnpj">Saber javacript</td>
                
                        
                    </tr>
               
                    <tr class="infos">
                        <td class="table-nome-professor">Cysco Systen</td>
                        <td class="table-email-professor">Front-end</td>
                        <td class="table-cnpj">Manha</td>
                        <td class="table-cnpj">R$2000,00</td>
                        <td class="table-cnpj">Saber javacript</td>
                     
                     
                    </tr>
               

                    <tr class="infos">
                        <td class="table-nome-professor">Cysco Systen</td>
                        <td class="table-email-professor">Front-end</td>
                        <td class="table-cnpj">Manha</td>
                        <td class="table-cnpj">R$2000,00</td>
                        <td class="table-cnpj">Saber javacript</td>
                      
                  
                    </tr>
               


                    <tr class="infos">
                        <td class="table-nome-professor">Cysco Systen</td>
                        <td class="table-email-professor">Front-end</td>
                        <td class="table-cnpj">Manha</td>
                        <td class="table-cnpj">R$2000,00</td>
                        <td class="table-cnpj">Saber javacript</td>
                      
                      
                    </tr>
               
                </tbody>
            </table>

        </section>



    </main>
    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>