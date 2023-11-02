<?php
require_once "./back-end/login/validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--link icone filtro-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../pag-aluno/components/components-aluno.css">

    <link rel="stylesheet" href="../pag-aluno/css/processo-seletivo.css">
    <title>Processos Seletivos</title>
    <style>
        .container {
      margin-top: 30px;
    }

    .table {
      margin-top: 20px;
    }

    select {
      width: 100%;
    }

    h5 {
        text-align: center;
       font-weight: bold;
       margin-top: 5%;
     
    }
    </style>
</head>

<body>
    <?php
    include('../pag-aluno/components/navbar.php');
    ?>
    <main id="main">

        <div class="box">
                <section class="filtro">
                    <div class="container mt-4">
        <h5>Filtre por:</h5>

        <div class="row" style="margin-top: 2%;">
            <div class="col-md-3">
            <select id="periodo" class="form-control">
                <option value="">Período</option>
                <option value="manha">Manhã</option>
                <option value="tarde">Tarde</option>
                <option value="noite">Noite</option>
            </select>
            </div>
            <div class="col-md-3">
            <select id="curso" class="form-control">
                <option value="">Curso</option>
                <option value="engenharia">Engenharia</option>
                <option value="medicina">Medicina</option>
                <option value="direito">Direito</option>
            </select>
            </div>
            <div class="col-md-3">
            <select id="area" class="form-control">
                <option value="">Área</option>
                <option value="ti">TI</option>
                <option value="saude">Saúde</option>
                <option value="juridico">Jurídico</option>
            </select>
            </div>
            <div class="col-md-3">
            <select id="salario" class="form-control">
                <option value="">Salário</option>
                <option value="menos-de-2000">Menos de R$ 2.000</option>
                <option value="2000-4000">R$ 2.000 - R$ 4.000</option>
                <option value="mais-de-4000">Mais de R$ 4.000</option>
            </select>
            </div>
        </div>
        </div>


   
        </div>

    </main>
    <script src="https://kit.fontawesome.com/57efc2ce52.js" crossorigin="anonymous"></script>
</body>

</html>