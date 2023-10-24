<?php
require_once "./back-end/login/validador_acesso.php";
include ('../dao/conexao.php');
$querySelect = "SELECT * FROM  tb_etec ";

$query = $conexao->query($querySelect);

$etec = $query->fetchAll();


?>
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
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
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
        thead {
    color: rgb(70, 70, 70);
    font-weight: 600;
    }

    th {
        text-align: center;
        padding-top: 10px;
    }

    table {
        background-color: rgba(247, 247, 247, 0.641);
        border-radius: 20px;
        width: 52%;
    }
    table td {
    padding: 20px 5px 30px 5px;
    text-align: center;
    color: rgb(94, 94, 94);

}
    </style>

</head>

<body>
    <?php
    include('../pag-aluno/components/header.php');
    ?>
<div class="container">
        <form id="language-form">
            <div class="language-container">
                <label for="idioma">Idioma:</label>
                <select name="idioma">
                    <option value="ingles">Inglês</option>
                    <option value="espanhol">Espanhol</option>
                    <option value="frances">Francês</option>
                    <option value="outro">Outro</option>
                </select>

                <label for="nivel">Nível de Proficiência:</label>
                <select name="nivel">
                    <option value="iniciante">Iniciante</option>
                    <option value="intermediario">Intermediário</option>
                    <option value="avancado">Avançado</option>
                </select>
            </div>
            <button type="button" class="button" onclick="addLanguage()">Adicionar Novo Idioma</button>
            <input type="submit" value="Avançar" class="button">
        </form>
    </div>

<section class="etec">
            <tbody class="infos" id="result">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">IDIOMA</th>
      <th scope="col">NÍVEL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td class="icone-table"> X <a
            href=""><i
                class="fa-solid fa-x" style="color: #000000;"></i></a>

    </td>
    </tr>
    
   
  </tbody>
</table>

            </tbody>

</section>

</body>

</html>
<script src="js/funcoes.js"></script>

