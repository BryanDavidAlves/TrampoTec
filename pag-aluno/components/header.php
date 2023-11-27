<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  .img-nav {
    width: 50%;
    height: 17%;
  }


  ul {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
  }


  /* Animação de cor suave ao passar o mouse sobre os links */
  .navbar-nav .nav-link {
    color: black !important;
    border-radius: 20px;
  }

  .navbar-nav .nav-link:hover {
    color: red !important;
    /* Cor de destaque ao passar o mouse sobre os links */
  }

  /* Animação de fundo suave ao passar o mouse sobre os links */
  .navbar-nav .nav-link {
    transition: background-color 0.3s ease-in-out;
  }
</style>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="img">
        <img class="img-nav" src="img/trampotec-logo.png" alt="Bootstrap" width="30" height="24">
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="painel-de-vagas.php">Painel de vagas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="processos-seletivos.php">Processo seletivo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="meu-curriculo.php">Meu currículo</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Meu Perfil
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="perfil.php">Meus dados</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="curriculo.php">Currículo</a></li>
           <!--   <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="notificacoes.php">Notificações</a></li>-->
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="contato.php">Fale Conosco</a></li>
              <li>
                <hr class="dropdown-divider">
                <!--       </li>
            <li><a class="dropdown-item" href="#">Configurações</a></li>
              <li>
                <hr class="dropdown-divider">-->
              </li>
              <li><a class="dropdown-item" href="back-end/login/logout.php">Sair</a></li>
            </ul>
          </li>
      </div>
    </div>
  </nav>
</body>

</html>
