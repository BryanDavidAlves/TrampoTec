<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Currículo</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .info-field {
            margin-bottom: 20px;
        }

        .info-field label {
            font-weight: bold;
            display: block;
        }

        #editButton {
            display: block;
            margin: 20px auto;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        label{
            font-weight: bold;
            font-size: 19px;
        }
    </style>

</head>
<body>
        <?php
include '../pag-aluno/components/header.php';
?>
    <div class="container">
        <h1>Meu Currículo</h1>

        <div class="form-group">
            <label for="nome">Instituição:</label>
            <div type="text" id="instituicao">Etec de Guainazes </div>
        </div>
        <br>
        <div class="form-group">
            <label for="curso">Curso:</label>
            <div type="text" id="curso">Desenvolvimento de sistemas</div>
        </div>
        <br>
        <div class="form-group">
            <label for="periodo">Período:</label>
            <div type="text" id="periodo">Tarde</div>
        </div>
        <br>
        <div class="form-group">
            <label for="semestre">Semestre:</label>
            <div id="semestre">3º semestre</div>
        </div>
        <br>
        <div class="form-group">
            <label for="caraga">Carga Horária:</label>
            <div id="caraga">400 horas </div>
        </div>
        <br>
        <div class="form-group">
            <label for="conclusao">Coclusão:</label>
            <div id="conclusao">2023</div>
        </div>
        <br>
        <div class="form-group">
            <label for="idioma">idioma:</label>
            <div id="idioma">Inglês</div>
        </div>
        <br>
        <div class="form-group">
            <label for="nivel">Nivel de proficiência:</label>
            <div id="nivel">Intermediario</div>
        </div>
        <br>
        <div class="form-group">
            <label for="conhecimentos">Conhecimentos:</label>
            <div id="conhecimentos">Banco de dados</div>
        </div>
        <br>
       <div class="form-group">
            <label for="habilidades">Habilidades:</label>
            <div id="habilidades">Trabalho em equipe</div>
        </div>
    </div>
    <a href="curriculo.php">
    <button id="editButton">Editar currículo</button>
    </a>
</body>
</html>