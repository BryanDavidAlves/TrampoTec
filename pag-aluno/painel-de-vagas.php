<?php
require_once "./back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/painel-de-vagas.css">
    <title>Pagina de Vagas</title>
    
    <style>
        .align-cards {
    display: flex;
    width: 720px;
    flex-wrap: wrap;
    gap: 60px;
    justify-content: start;
    flex-direction: row;
}
        .card {
  width: 250px;
  height: 280px;
  background: rgb(39, 39, 39);
  border-radius: 12px;
  box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.123);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  transition-duration: .5s;
  margin-left: 8%;
  margin-top: 8%;
}

.profileImage {
  background: linear-gradient(to right,rgb(54, 54, 54),rgb(32, 32, 32));
  margin-top: 20px;
  width: 170px;
  height: 170px;
  border-radius: 50%;
  box-shadow: 5px 10px 20px rgba(0, 0, 0, 0.329);
}

.textContainer {
  width: 100%;
  text-align: left;
  padding: 20px;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.name {
  font-size: 0.9em;
  font-weight: 600;
  color: white;
  letter-spacing: 0.5px;
}

.profile {
  font-size: 0.84em;
  color: rgb(194, 194, 194);
  letter-spacing: 0.2px;
}

.card:hover {
  background-color: rgb(43, 43, 43);
  transition-duration: .5s;
}
    </style>
</head>

<body>

    <?php
    include('../pag-aluno/components/header.php');
    ?>
            
            <div class="card">
            <div class="profileImage">
                <svg viewBox="0 0 128 128"><circle r="60" fill="transparent" cy="64" cx="64"></circle><circle r="48" fill="transparent" cy="64" cx="64"></circle><path fill="#191919" d="m64 14a32 32 0 0 1 32 32v41a6 6 0 0 1 -6 6h-52a6 6 0 0 1 -6-6v-41a32 32 0 0 1 32-32z"></path><path opacity="1" fill="#191919" d="m62.73 22h2.54a23.73 23.73 0 0 1 23.73 23.73v42.82a4.45 4.45 0 0 1 -4.45 4.45h-41.1a4.45 4.45 0 0 1 -4.45-4.45v-42.82a23.73 23.73 0 0 1 23.73-23.73z"></path><circle r="7" fill="#fbc0aa" cy="65" cx="89"></circle><path fill="#4bc190" d="m64 124a59.67 59.67 0 0 0 34.69-11.06l-3.32-9.3a10 10 0 0 0 -9.37-6.64h-43.95a10 10 0 0 0 -9.42 6.64l-3.32 9.3a59.67 59.67 0 0 0 34.69 11.06z"></path><path opacity=".3" fill="#356cb6" d="m45 110 5.55 2.92-2.55 8.92a60.14 60.14 0 0 0 9 1.74v-27.08l-12.38 10.25a2 2 0 0 0 .38 3.25z"></path><path opacity=".3" fill="#356cb6" d="m71 96.5v27.09a60.14 60.14 0 0 0 9-1.74l-2.54-8.93 5.54-2.92a2 2 0 0 0 .41-3.25z"></path><path fill="#fff" d="m57 123.68a58.54 58.54 0 0 0 14 0v-25.68h-14z"></path><path stroke-width="14" stroke-linejoin="round" stroke-linecap="round" stroke="#fbc0aa" fill="none" d="m64 88.75v9.75"></path><circle r="7" fill="#fbc0aa" cy="65" cx="39"></circle><path fill="#ffd8ca" d="m64 91a25 25 0 0 1 -25-25v-16.48a25 25 0 1 1 50 0v16.48a25 25 0 0 1 -25 25z"></path><path fill="#191919" d="m91.49 51.12v-4.72c0-14.95-11.71-27.61-26.66-28a27.51 27.51 0 0 0 -28.32 27.42v5.33a2 2 0 0 0 2 2h6.81a8 8 0 0 0 6.5-3.33l4.94-6.88a18.45 18.45 0 0 1 1.37 1.63 22.84 22.84 0 0 0 17.87 8.58h13.45a2 2 0 0 0 2.04-2.03z"></path><path style="fill:none;stroke-linecap:round;stroke:#fff;stroke-miterlimit:10;stroke-width:2;opacity:.1" d="m62.76 36.94c4.24 8.74 10.71 10.21 16.09 10.21h5"></path><path style="fill:none;stroke-linecap:round;stroke:#fff;stroke-miterlimit:10;stroke-width:2;opacity:.1" d="m71 35c2.52 5.22 6.39 6.09 9.6 6.09h3"></path><circle r="3" fill="#515570" cy="62.28" cx="76"></circle><circle r="3" fill="#515570" cy="62.28" cx="52"></circle><ellipse ry="2.98" rx="4.58" opacity=".1" fill="#f85565" cy="69.67" cx="50.42"></ellipse><ellipse ry="2.98" rx="4.58" opacity=".1" fill="#f85565" cy="69.67" cx="77.58"></ellipse><g stroke-linejoin="round" stroke-linecap="round" fill="none"><path stroke-width="4" stroke="#fbc0aa" d="m64 67v4"></path><path stroke-width="2" stroke="#515570" opacity=".2" d="m55 56h-9.25"></path><path stroke-width="2" stroke="#515570" opacity=".2" d="m82 56h-9.25"></path></g><path opacity=".4" fill="#f85565" d="m64 84c5 0 7-3 7-3h-14s2 3 7 3z"></path><path fill="#f85565" d="m65.07 78.93-.55.55a.73.73 0 0 1 -1 0l-.55-.55c-1.14-1.14-2.93-.93-4.27.47l-1.7 1.6h14l-1.66-1.6c-1.34-1.4-3.13-1.61-4.27-.47z"></path></svg>

            </div>
            <div class="textContainer">
                <p class="name">Pepper Potts</p>
                <p class="profile">Profile</p>
            </div>
            </div>

                <section class="vagas">
                    <div class="align-cards">
                        <div class="cards">
                            <div class="localidade">
                                <h4>SÃO PAULO - SP</h4>
                                <h4>TATUAPÉ</h4>
                            </div>
                            <h4>Desenvolvedor Front End Junior</h4>
                            <h4>Presencial</h4>
                            <h4>R$2.520,00</h4>
                            <button id="btn1">Clique para mais informações</button>

                        </div>

                        <div class="cards">
                            <div class="localidade">
                                <h4>SÃO PAULO - SP</h4>
                                <h4>TATUAPÉ</h4>
                            </div>
                            <h4>Desenvolvedor Front End Junior</h4>
                            <h4>Presencial</h4>
                            <h4>R$2.520,00</h4>
                            <button id="btn2">Clique para mais informações</button>

                        </div>

                        <div class="cards">
                            <div class="localidade">
                                <h4>SÃO PAULO - SP</h4>
                                <h4>TATUAPÉ</h4>
                            </div>
                            <h4>Desenvolvedor Front End Junior</h4>
                            <h4>Presencial</h4>
                            <h4>R$2.520,00</h4>
                            <button id="btn3">Clique para mais informações</button>
                        </div>


                    </div>
                </section>
            </section>
            <!--</div>-->
        </div>


    <dialog id="modal">
        <section class="container-modal">
            <div class="header-modal">
                <button id="closeModal">
                    <i class="fa-solid fa-xmark" style="color: #ff0000;"></i>
                </button>
            </div>
            <section class="info-empresa">
                <div class="div-img-modal">
                    <img class="img-modal" src="img/nuts.png" alt="">
                </div>
                <div class="sobre-empresa">
                    <h2>Nuts</h2>
                    <h3>EmpresaTecnologica</h3>
                    <h4>Desde 2023</h4>
                </div>
            </section>
            <div class="sobre-vaga">
                <section class="conhecimento">
                    <h2>CONHECIMENTOS</h2>
                    <ul>
                        <li>JAVA</li>
                        <li>PHP</li>
                        <li>HTML</li>
                    </ul>
                </section>
                <section class="desc-vaga">
                    <h2>ESTÁGIO BACK END</h2>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab magni reiciendis, reprehenderit
                            assumenda aliquid aut alias eligendi delectus harum quisquam maxime voluptates nulla illum.
                            Iste deleniti libero nulla quidem? Ut?</p>
                    </div>
                </section>
            </div>
            <button id="btn" onclick="openModal()">CANDIDATAR-SE</button>
        </section>
    </dialog>

    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>

    <script src="js/modal-vagas.js"></script>
    <script>
        var closeModal = document.getElementById("closeModal")
        closeModal.onclick = function () {
            modal.close()
        }
    </script>
</body>

</html>