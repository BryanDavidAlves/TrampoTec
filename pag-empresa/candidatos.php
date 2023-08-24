<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../reset.css">
    <link rel='stylesheet' href='../pag-empresa/componentes/componente.css'>
    <link rel='stylesheet' href='../pag-empresa/css/Candidatos.css'>
    <title>TrampoTec</title>
</head>

<body>

    <?php include('../pag-empresa/componentes/sidebar.php') ?>
    <?php include('../pag-empresa/componentes/rightbar-candidato.php') ?>
    <?php include('../pag-empresa/componentes/email.php') ?>
    <?php include('../pag-empresa/componentes/notificacao.php') ?>

    <main class="main">

        <section class="cards-candidatos">

            <div class="card">
                <div class="card-corpo">
                    <div class="imagens">
                        <img class="imagem-candidato" src="./img/fotodeempresa.avif" alt="foto da empresa da empresa">
                    </div>

                    <div class="card-itens">
                        <p class="nome-empresa"> Cisco System</p>
                        <p class="nome-vaga"> Web designer</p>
                        <p class="informacao-vaga"> vaga para trabalhar de web designer remotamente</p>
                    </div>


                    <div class="tres-pontinhos">
                        <a href="#"> <i class="fa-solid fa-pen"></i> </a>
                    </div>
                </div>
                <div class="notificacoes-candidato">
                    <span><i class="fa-solid fa-user-check"></i> 30 candidatos</span>
                </div>

                <div class="seta-dropdown">
                    <i class="icon-seta fa-solid fa-angle-down"></i>
                </div>
            </div>

            <div class="card-reagendar " id="reagendar">
                <p>REAGENDAR ENTREVISTA</p>
                <form itens-reagendar>
                    <div class="itens-reagendar">
                        <label>TITULO</label>
                        <input " type=" text">
                        <label>HORARIO</label>
                        <input type="date">
                        <label>NOME do entrevistado</label>
                        <input type="text">
                    </div>
                    <button type="submit">REAGENDAR</button>
                </form>
            </div>

            <div class="card">
                <div class="card-corpo">
                    <div class="imagens">
                        <img class="imagem-candidato" src="./img/fotodeempresa.avif" alt="foto da empresa da empresa">
                    </div>

                    <div class="card-itens">
                        <p class="nome-empresa"> Cisco System</p>
                        <p class="nome-vaga"> Web designer</p>
                        <p class="informacao-vaga"> vaga para trabalhar de web designer remotamente</p>
                    </div>


                    <div class="tres-pontinhos">
                        <a href="#"> <i class="fa-solid fa-pen"></i> </a>
                    </div>
                </div>
                <div class="notificacoes-candidato">

                    <span><i class="fa-solid fa-user-check"></i> 30 candidatos</span>
                </div>


                <div class="seta-dropdown">
                    <i onclick="modalseta()" id="setabaixo" class="setacima icon-seta fa-solid fa-angle-down"></i>
                    <div class="cards-entrevistas">
                        <div class="modal-candidato" id="abrircandidato">
                            <div class="card-candidato-modal">
                                <div class="card-corpo-canditado">
                                    <div class="imagens-modal">
                                        <img class="imagem-candidato-modal" src="./img/bryan.jpg" alt="foto do aluno">
                                    </div>
                                    <div class="card-itens-modal">
                                        <p class="nome-candidato-modal"> Bryan David</p>
                                        <p class="entrevista-modal"> entrevista - 30/06 as 14:00</p>
                                    </div>
                                </div>

                                <div class="tres-pontinhos">
                                    <a class="seta-dropdown"> <i onclick="modalcandidatoremarcar()" class="pontinhos fa-solid fa-ellipsis-vertical"></i> </a>
                                    <div class="modal-aluno" id="candidato">
                                        <div class="card-modal-aluno">
                                            <a onclick="modalreagendar()" class="link-modal"><i class="icon-modal fa-regular fa-pen-to-square"></i> Remarcar Entrevista</a>

                                        </div>

                                    </div>
                                </div>

                            </div>



                            <div class="card-candidato-modal">
                                <div class="card-corpo-canditado">
                                    <div class="imagens-modal">
                                        <img class="imagem-candidato-modal" src="./img/bryan.jpg" alt="foto do aluno">
                                    </div>
                                    <div class="card-itens-modal">
                                        <p class="nome-candidato-modal"> Bryan David</p>
                                        <p class="entrevista-modal"> entrevista - 30/06 as 14:00</p>
                                    </div>
                                </div>

                                <div class="tres-pontinhos">
                                    <a class="seta-dropdown"> <i class="fa-solid fa-ellipsis-vertical"></i> </a>

                                </div>

                            </div>

                            <div class="card-candidato-modal">
                                <div class="card-corpo-canditado">
                                    <div class="imagens-modal">
                                        <img class="imagem-candidato-modal" src="./img/bryan.jpg" alt="foto do aluno">
                                    </div>
                                    <div class="card-itens-modal">
                                        <p class="nome-candidato-modal"> Bryan David</p>
                                        <p class="entrevista-modal"> entrevista - 30/06 as 14:00</p>
                                    </div>
                                </div>

                                <div class="tres-pontinhos">
                                    <a class="seta-dropdown"> <i class="fa-solid fa-ellipsis-vertical"></i> </a>

                                </div>

                            </div>






                        </div>
                    </div>
        </section>

    </main>
    <script src="./js/java-empresa.js"></script>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
</body>

</html>