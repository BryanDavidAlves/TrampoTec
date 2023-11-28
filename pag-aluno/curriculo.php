<?php
require_once "./back-end/login/validador_acesso.php";
include '../dao/conexao.php';
$querySelect = "SELECT * FROM  tb_etec ";

$query = $conexao->query($querySelect);

$etec = $query->fetchAll();

$aluno_id = $_SESSION['idAluno'];




?>
<?php
require_once "./back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <!--link icone filtro-->
  <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
  <link rel="stylesheet" href="../reset.css">

  <style>
    body {
      font-family: sans-serif;
    }

    form {
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      padding: 20px;
      height: auto;
      border-radius: 10px;
      padding: 50px;
      border-color: red;
      margin-top: 10%;

    }

    .align {
      display: flex;
      justify-content: center;
      margin-top: 100px;
    }

    .align-tabela {
      display: flex;
      gap: 200px;

    }

    h4 {
      text-align: center;
      font-size: 1.2rem;
      font-weight: 600;
    }

    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
      font-size: medium;
    }

    input,
    select {
      height: 6%;
      width: 100%;
      padding: 10px;
      margin-top: 5%;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      margin-top: 5%;
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }


    .align-tudo {
      display: flex;
      align-items: start;
      justify-content: space-around;
    }

    .button {
      padding: 11px;
      border-radius: 15px;
      border: 1px solid #0a3580;
      background-color: #0a3580;
      width: 200px;
      font-weight: 600;
      color: white;
      transition: 0.2s all ease-in-out;
      margin-left: auto;
      margin-right: auto;
      display: block;
      width: 100%;
      border-radius: 5px;
      text-decoration: none;
      text-align: center;
    }

    .button:hover {
      background-color: white;
      color: #0a3580;
      transition: 0.2s all ease-in-out;
    }

    /* Estilos para o modal e overlay */
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

    #card {
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 20px;
      width: 300px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-top: 10%;
    }

    h2 {
      color: #333;
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 15px
    }

    p {
      margin: 5px 0;
      color: #666;
    }

    h3 {
      font-weight: 600;
    }

    #card div {
      display: flex;
      align-items: baseline;
      margin: 15px 0px;
      gap: 2px;
    }

    /* Adicione estilos adicionais conforme necessário */
  </style>
  <title>Meu Curriculo</title>

</head>

<body>
  <?php
  include '../pag-aluno/components/header.php';
  ?>
  <div id="overlay"></div>

  <!-- Modal -->
  <div id="modal">
    <h6>Atenção!!</h6>
    <span id="closeBtn" onclick="fecharModal()">&times;</span>
    <p>Crie o seu curriculo para finalizar o seu cadastro!!</p>
    <button onclick="fecharModal()">OK</button>
  </div>
  <div class="progress">
    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
      aria-valuemax="100"></div>
  </div>

  <div class="align-tudo">
    <div class="align-tabela">

      <form action="./back-end/cadastro/salvarCurriculo.php" method="POST">
        <label for="nome">Instituição:</label>
        <select class="input" placeholder="etec" id="nome-etec" name="nome-etec" placeholder="Nome da Instituição">
          <option>Selecione uma Instituição</option>
          <?php foreach ($etec as $etec) { ?>
            <option value="<?= $etec[0] ?>">
              <?= $etec[1] ?>
            </option>
          <?php } ?>
        </select>

        <label for="curso">Curso:</label>
        <select class="input" placeholder="curso" name="curso" id="curso">
          <option value="">Selecione seu curso</option>
        </select>

        <label for="periodo">Período:</label>
        <select class="input" placeholder="periodo" name="periodo">
          <option value="">Selecione um período</option>
          <option value="">Vespertino</option>
          <option value="">Noturno</option>
          <option value="">Matutino</option>
          <option value="">Integral</option>
        </select>
        <select class="input" placeholder="semestre" name="semestre">
          <option value="1">Selecione um semestre</option>
          <option value="1">1 SEMESTRE</option>
          <option value="2">2 SEMESTRE</option>
          <option value="3">3 SEMESTRE</option>
          <option value="4">4 SEMESTRE</option>
          <option value="5">5 SEMESTRE</option>
          <option value="6">6 SEMESTRE</option>
        </select>

        <label for="carga_horaria">Carga Horária:</label>
        <input type="number" id="carga_horaria" name="duracao" required>

        <label for="conclusao">Conclusão:</label>
        <input class="input" placeholder="conclusao" name="conclusao" type="date"></p>

        <input type="submit" value="Adicionar Curso">

        <a href="formulario2.php" class="button">Próximo</a>

      </form>

    </div>
    <div id="card">

      <h2>Informações do Curso</h2>
      <div>
        <h3>Instituição:</h3>
        <p>Nome da Instituição</p>
      </div>
      <div>
        <h3>Curso:</h3>
        <p> Nome do Curso</p>
      </div>
      <div>
        <h3>Período:</h3>
        <p> Manhã</p>
      </div>
      <div>
        <h3>Semestres Totais:</h3>
        <p> 8</p>
      </div>
      <div>
        <h3>Carga Horária:</h3>
        <p> 1600 horas</p>
      </div>
      <div>
        <h3>Conclusão:</h3>
        <p> Dezembro de 2024</p>
      </div>

    </div>
  </div>
</body>


</html>
<script src="js/funcoes.js"></script>
<script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
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
  let curri = urlParams.get('curri');

  if (curri === 'true') {
    abrirModal();
  }
</script>