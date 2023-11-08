<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Currículo</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
.resume .resume-title {
  font-size: 26px;
  font-weight: 400;
  margin-top: 20px;
  margin-bottom: 20px;
  color: #222222;
  
}

.resume .resume-item {
  padding: 0 0 20px 20px;
  margin-top: -2px;
  border-left: 5px solid blue;
  position: relative;
}

.resume .resume-item h4 {
  line-height: 18px;
  font-size: 18px;
  font-weight: 600;
  font-family: "Poppins", sans-serif;
  color: #1d685f;
  margin-bottom: 10px;
}

.resume .resume-item em {
  font-size: 16px;
  font-family: "Poppins", sans-serif;
  margin-left: 4%;  
}

.botoes{

display: flex;
justify-content: space-between;
width: 40%;
margin-top: 3%;
}

.resume .resume-item ul {
  padding-left: 20px;
}

.resume .resume-item ul li {
  padding-bottom: 10px;
}

.resume .resume-item:last-child {
  padding-bottom: 0;
}

.resume .resume-item::before {
  content: "";
  position: absolute;
  width: 16px;
  height: 16px;
  border-radius: 50px;
  left: -9px;
  top: 0;
  background: #fff;
  border: 2px solid blue;
}

button {
  font-family: "Raleway", sans-serif;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 12px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 40px;
  border-radius: 50px;
  transition: 0.5s;
  color: #fff;
  background: red;
  border-color: transparent;
}

button:hover {
  background: #3dc8b7;
}

    </style>

</head>
<body>
        <?php
include '../pag-aluno/components/header.php';
?>
    <main id="main">

<section id="resume" class="resume">
  <div class="container"  data-aos="fade-up">


    <div class="section-title">
      <h2 style=" margin-top: 3%;">Meu currículo</h2>
    </div>


    <div class="row">
      <div class="col-lg-6" style="text-align:justify;">
        <h3 class="resume-title">Acadêmico</h3>
        <div class="resume-item ">
          <h4>Conhecimentos escolares</h4>
          <li>Instituição:<p><em>Etec de Guainazes</em></p></li>
          <p>
          <li>Curso:<p><em>Desenvolvimento de Sistemas</em></p></li>
          <li>Carga Horária:<p><em>400 Horas</em></p></li>
          <li>Conclusão:<p><em>2023</em></p></li>
        </div>

        <h3 class="resume-title">Adicional</h3>
        <div class="resume-item">
        <h4>Informações adicionais</h4>
        <li>Conhecimentos:<p><em>Banco de dados</em></p></li>
          <p>
          <li>Habilidades:<p><em>Trabalho em equipe</em></p></li>
        </div>
      </div>
      <div class="col-lg-6" style="text-align:justify;">
        <h3 class="resume-title">Idiomas</h3>
        <div class="resume-item">
          <h4>Idiomas e nível de proficiência</h4>
          <li>idiomas:<p><em>Inglês</em></p></li>
          <p>
          <li>Nível:<p><em>Intermediário</em></p></li>
        </div>
      </div>
    </div>
    <div class="botoes">
    <a href="curriculo.php">
    <button id="editButton">Editar currículo</button>
    </a>
    <button id="editButton">Tranformar em PDF</button>
    </div>

  </div>
</section>
    </main>

</body>
</html>