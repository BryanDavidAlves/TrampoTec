<?php
require_once "./back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/curriculo.css">

    <title>Meu Curriculo</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  font-family: 'Poppins', sans-serif;
}

::selection{
  color: #fff;
  background: #00cc00;
}
.container{
  width: 330px;
  background: #fff;
  text-align: center;
  border-radius: 5px;
  padding: 50px 35px 10px 35px;
}
.container header{
  font-size: 35px;
  font-weight: 600;
  margin: 0 0 30px 0;
}
.container .form-outer{
  width: 100%;
  overflow: hidden;
}
.container .form-outer form{
  display: flex;
  width: 400%;
}
.form-outer form .page{
  width: 25%;
  transition: margin-left 0.3s ease-in-out;
}
.form-outer form .page .title{
  text-align: left;
  font-size: 25px;
  font-weight: 500;
}
.form-outer form .page .field{
  width: 330px;
  height: 45px;
  margin: 45px 0;
  display: flex;
  position: relative;
}
form .page .field .label{
  position: absolute;
  top: -30px;
  font-weight: 500;
}
form .page .field input{
  height: 100%;
  width: 100%;
  border: 1px solid lightgrey;
  border-radius: 5px;
  padding-left: 15px;
  font-size: 18px;
}
form .page .field select{
  width: 100%;
  padding-left: 10px;
  font-size: 17px;
  font-weight: 500;
}
form .page .field button{
  width: 100%;
  height: calc(100% + 5px);
  border: none;
  background: #00cc00;
  margin-top: -20px;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: 0.5s ease;
}
form .page .field button:hover{
  background: #000;
}
form .page .btns button{
  margin-top: -20px!important;
}
form .page .btns button.prev{
  margin-right: 3px;
  font-size: 17px;
}
form .page .btns button.next{
  margin-left: 3px;
}
.container .progress-bar{
  display: flex;
  margin: 40px 0;
  user-select: none;
}
.container .progress-bar .step{
  text-align: center;
  width: 100%;
  position: relative;
}
.container .progress-bar .step p{
  font-weight: 500;
  font-size: 18px;
  color: #000;
  margin-bottom: 8px;
}
.progress-bar .step .bullet{
  height: 25px;
  width: 25px;
  border: 2px solid #000;
  display: inline-block;
  border-radius: 50%;
  position: relative;
  transition: 0.2s;
  font-weight: 500;
  font-size: 17px;
  line-height: 25px;
}
.progress-bar .step .bullet.active{
  border-color: #00cc00;
  background: #00cc00;
}
.progress-bar .step .bullet span{
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}
.progress-bar .step .bullet.active span{
  display: none;
}
.progress-bar .step .bullet:before,
.progress-bar .step .bullet:after{
  position: absolute;
  content: '';
  bottom: 11px;
  right: -51px;
  height: 3px;
  width: 44px;
  background: #262626;
}
.progress-bar .step .bullet.active:after{
  background: #00cc00;
  transform: scaleX(0);
  transform-origin: left;
  animation: animate 0.3s linear forwards;
}
@keyframes animate {
  100%{
    transform: scaleX(1);
  }
}
.progress-bar .step:last-child .bullet:before,
.progress-bar .step:last-child .bullet:after{
  display: none;
}
.progress-bar .step p.active{
  color: #00cc00;
  transition: 0.2s linear;
}
.progress-bar .step .check{
  position: absolute;
  left: 50%;
  top: 70%;
  font-size: 15px;
  transform: translate(-50%, -50%);
  display: none;
}
.progress-bar .step .check.active{
  display: block;
  color: #fff;
}
</style>
</head>

<body>
    <?php
    include('../pag-aluno/components/header.php');
    ?>

    <?php
    include('../pag-aluno/components/sidebar.php');
    ?>
    <!-- <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
    <script src="js/troca-pag.js"></script>
    <script src="js/abrir-hab.js"></script>
    <script src="js/modal-curriculo.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script>
        var closeModalCurso = document.getElementById("closeModalCurso")
        var closeModalIdioma = document.getElementById("closeModalIdioma")
        closeModalCurso.onclick = function () {
            modalCurso.close()
        }
        closeModalIdioma.onclick = function () {
            modalIdioma.close()
        }
    </script> -->
    <div class="container">
      <div class="progress-bar">
        <div class="step">
          <p>Nome</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Contato</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Data</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Enviar</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form action="#">
          <div class="page slide-page">
            <div class="title">Informação básica:</div>
            <div class="field">
              <div class="label">Primeiro nome</div>
              <input type="text">
            </div>
            <div class="field">
              <div class="label">Sobrenome</div>
              <input type="text">
            </div>
            <div class="field">
              <button class="firstNext next">Próximo</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Informações de contato</div>
            <div class="field">
              <div class="label">Endereço de e-mail</div>
              <input type="text">
            </div>
            <div class="field">
              <div class="label">Número de telefone</div>
              <input type="Number">
            </div>
            <div class="field btns">
              <button class="prev-1 prev">Anterior</button>
              <button class="next-1 next">Próximo</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Nascimento:</div>
            <div class="field">
              <div class="label">Data</div>
              <input type="text">
            </div>
            <div class="field">
              <div class="label">Gênero</div>
              <select>
                <option>Masculino</option>
                <option>Feminino</option>
                <option>Outros</option>
              </select>
            </div>
            <div class="field btns">
              <button class="prev-2 prev">Anterior</button>
              <button class="next-2 next">Próximo</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Detalhes de login:</div>
            <div class="field">
              <div class="label">Nome do usuário</div>
              <input type="text">
            </div>
            <div class="field">
              <div class="label">Senha</div>
              <input type="password">
            </div>
            <div class="field btns">
              <button class="prev-3 prev">Anterior</button>
              <button class="submit">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="script.js"></script>
    
</body>

</html>