<?php
require_once "./back-end/login/validador_acesso_curri.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../reset.css">
  <title>Página Inicial</title>
  <style>
    body {
      font-family: sans-serif;
    }

    #hero {
      width: 100%;
      height: 90vh;
      background: white;
    }

    #hero h1 {
      margin-top: 1px;
      font-size: 48px;
      font-weight: 700;
      line-height: 56px;
      color: #37517e;
    }

    #hero h2 {
      color: black;
      margin-bottom: 50px;
      font-size: 24px;
    }

    button {
      font-family: "Jost", sans-serif;
      font-weight: 500;
      font-size: 16px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 10px 28px 11px 28px;
      border-radius: 50px;
      transition: 0.5s;
      margin: 10px 0 0 0;
      color: #fff;
      background: red;
      border-color: transparent;
    }

    #hero .btn-get-started:hover {
      background: #209dd8;
    }


    #hero .animated {
      animation: up-down 0s;
    }

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

    @media (max-width: 991px) {
      #hero {
        height: 100vh;
        text-align: center;
      }

      #hero .animated {
        animation: none;
      }

    }

    @media (max-width: 768px) {
      #hero h1 {
        font-size: 28px;
        line-height: 36px;
      }

      #hero h2 {
        font-size: 18px;
        line-height: 24px;
        margin-bottom: 30px;
      }

      #hero .hero-img img {
        width: 70%;
      }
    }


    @media (max-width: 575px) {
      #hero .hero-img img {
        width: 80%;
      }

      #hero .btn-get-started {
        font-size: 16px;
        padding: 10px 24px 11px 24px;
      }
    }

    @keyframes up-down {
      0% {
        transform: translateY(10px);
      }

      100% {
        transform: translateY(-10px);
      }
    }
  </style>
</head>

<body>

  <?php
  include('../pag-aluno/components/header.php');
  ?>
  <div id="overlay"></div>

  <!-- Modal -->
  <div id="modal">
    <h6>Bem Vindo ao nosso site</h6>
    <span id="closeBtn" onclick="fecharModal()">&times;</span>
    <p>Desejamos a melhor experiencia para voce para a procura de estágios!!</p>
    <button onclick="fecharModal()">OK</button>
  </div>
  <div id="overlay2"></div>

  <!-- Modal -->
  <div id="modal2">
    <h6>Finalizado</h6>
    <span id="closeBtn2" onclick="fecharModal2()">&times;</span>
    <p>Corriculo atualizado com sucesso!!</p>
    <button onclick="fecharModal2()">OK</button>
  </div>
  <main id="main">



    <section id="hero" class="d-flex align-items-center justify-content-center">

      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>Ingressando você no mercado de trabalho</h1>
            <br>
            <h2>Encontre seu emprego e entre no mercado de trabalho com mais facilidade</h2>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="curriculo.php">
                <button id="editButton">Criar currículo</button>
              </a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="img/img-home.png" style="width: 450px;" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section>


  </main>
  <?php
  if (isset($_GET['curriculo']) && $_GET['curriculo'] == "sim") {
  ?>
    <div>

    </div>
  <?php
  }

  ?>

  <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
  <script src="js/modal-vagas.js"></script>
  <script src="../assets/js/sweetalert2@11.js"></script>
  <script>
    var closeModal = document.getElementById("closeModal")
    closeModal.onclick = function() {
      modal.close()
    }

    function alert() {
      Swal.fire(
        'Parabéns!',
        'seja bem Vindo ao TrampoTec!',
        'success'
      )
    }
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
    let curriculo = urlParams.get('curriculo');

    if (curriculo === 'true') {
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
    let curriculoAtualizado = urlParamss.get('curriculoAtualizado');

    if (curriculoAtualizado === 'true') {
      abrirModal2();
    }
  </script>

  <!-- /* <script src="../assets/js/sweetalert2@11.js"></script> */ -->
</body>

</html>