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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--link icone filtro-->
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">
    <link rel="stylesheet" href="../pag-aluno/css/curriculo.css">

    <title>Meu Curriculo</title>

    <style>

#regForm {
    background-color: #ffffff;
    margin: 0px auto;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding: 10px;
    border-radius: 10px
}

#register{

  color: #f9210e;
  font-size: 22px;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-weight: bold;
}

h1 {
    text-align: center
}

.input {
  margin-top: 2%;
    height: 80%;
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    border: 2px solid #aaaaaa;
    border-radius: 10px;
    -webkit-appearance: none;
}



.tab input:focus{

  border:1px solid #6a1b9a !important;
  outline: none;
}

input.invalid {
 
    border:1px solid #e03a0666;
}

.tab {
  font-weight: bold;
    display: none;
    top: 3%;
    color: #0a04bf;
    font-size: 20px;
}

button {
    background-color: #6A1B9A;
    color: white;
    border: none;
    border-radius: 20%;
    padding: 10px 20px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    cursor: pointer
}


#prevBtn {
  position: fixed;
    background-color: #bbbbbb;
    color: black;
    font-size: 20px;
}

#nextBtn {

    background-color: red;
    color: black;
    font-size: 20px;
}


.all-steps{
      text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 100%;
    display: inline-flex;
    justify-content: center;
}

.step {
    gap: 20px;
    position: relative;
    height: 100px;
    width: 300px;
    text-align: center;
    background-color: transparent;
    border: none;
    border-radius: 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 20px;
    color: #0a04bf;
    opacity: 0.5;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.step.active {
    opacity: 1
}


.step.finish {
   color: #fff;
   background: #6a1b9a;
   opacity: 1;

}


.all-steps {
    text-align: center;
    margin-top: 10px;
    margin-bottom: 60px;
}



</style>
</head>

<body>
    <?php
    include('../pag-aluno/components/header.php');
    ?>

   <div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <form id="regForm">
                <h1 id="register">Preencha seu currículo</h1>
                <div class="all-steps" id="all-steps"> 
                  <span class="step">Informações acadêmicas</i></span> 
                  <span class="step">Conhecimentos</i></span>
                  <span class="step">Conhecimentos adicionais</i></span>
                  <span class="step">Disponibilidade</i></span>
                </div>

                <div class="tab">
                  <h6>Curso:</h6>
                    <p>
                      <input class="input" placeholder="Name..." name="fname"></p>
                      <br>
                      <h6>Semestre:</h6>
                    <p>
                      <input class="input" placeholder="Name..." name="fname"></p>
                      <br>
                      <h6>Período:</h6>
                    <p>
                      <input class="input" placeholder="Name..." name="fname"></p>
                      <br>
                      <h6>Instituição ETEC:</h6>
                    <p>
                      <input class="input" placeholder="Name..." name="fname"></p>
                      <br>
                      <h6>Duração:</h6>
                    <p>
                      <input class="input" placeholder="Name..."  name="fname"></p>
                      <br>
                      <h6>Conclusão:</h6>
                    <p>
                      <input class="input" placeholder="Name..."  name="fname"></p>
                    
                </div>
                <div class="tab">
                  <h6>Idioma:</h6>
                    <p><input class="input" placeholder="City"  name="dd"></p>
                    <br>
                    <h6>Nível:</h6>
                    <p><input class="input" placeholder="City"  name="dd"></p>
                    <br>
                    <h6>Habilidades Tecnológicas:</h6>
                    <p><input class="input" placeholder="City"  name="dd"></p>
                </div>
                <div class="tab">
                    <h6>Conhecimentos adicionais:</h6>
                    <p><input class="input" placeholder="Favourite Shopping site"  name="email"></p>
                 
                </div>
                <div class="tab">
                    <h6>Horário de disponilidade a partir das:</h6>
                    <p><input class="input" placeholder="Favourite car"  name="uname"></p>
                </div>

                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right;">
                      <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"> Voltar </i></button> 
                      <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right">Avançar</i></button> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
</body>

</html>
<script>
  var currentTab = 0;
              document.addEventListener("DOMContentLoaded", function(event) {


              showTab(currentTab);

              });

              function showTab(n) {
              var x = document.getElementsByClassName("tab");
              x[n].style.display = "block";
              if (n == 0) {
              document.getElementById("prevBtn").style.display = "none";
              } else {
              document.getElementById("prevBtn").style.display = "inline";
              }
              if (n == (x.length - 1)) {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              } else {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              }
              fixStepIndicator(n)
              }

              function nextPrev(n) {
              var x = document.getElementsByClassName("tab");
              if (n == 1 && !validateForm()) return false;
              x[currentTab].style.display = "none";
              currentTab = currentTab + n;
              if (currentTab >= x.length) {
            
              document.getElementById("nextprevious").style.display = "none";
              document.getElementById("all-steps").style.display = "none";
              document.getElementById("register").style.display = "none";
              document.getElementById("text-message").style.display = "block";




              }
              showTab(currentTab);
              }

              function validateForm() {
                   var x, y, i, valid = true;
                   x = document.getElementsByClassName("tab");
                   y = x[currentTab].getElementsByTagName("input");
                   for (i = 0; i < y.length; i++) {
                       if (y[i].value == "") {
                           y[i].className += " invalid";
                           valid = false;
                       }


                   }
                   if (valid) {
                       document.getElementsByClassName("step")[currentTab].className += " finish";
                   }
                   return valid;
               }

               function fixStepIndicator(n) {
                   var i, x = document.getElementsByClassName("step");
                   for (i = 0; i < x.length; i++) {
                       x[i].className = x[i].className.replace(" active", "");
                   }
                   x[n].className += " active";
               }
</script>