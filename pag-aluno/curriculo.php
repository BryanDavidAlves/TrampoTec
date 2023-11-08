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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!--link icone filtro-->
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../reset.css">

    <style>
        body {
  font-family: Arial, sans-serif;

}

form {
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  padding: 10px;
  height: 620px;
  border-radius: 10px;
  padding: 20px;
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
}

input,
select {
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


.align-tudo {
  display: flex;
  align-items: center;
  justify-content: center;
  position: fixed;
  width: 100%;
  height: 100%;
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


     </style>   
    <title>Meu Curriculo</title>

</head>

<body>
    <?php
    include '../pag-aluno/components/header.php';
    ?>

<div class="align-tudo">
    <div class="align-tabela">
        <form action="./back-end/cadastro/salvarCurriculo.php" method="POST">
            <label for="nome">Instituição:</label>
            <select class="input" placeholder="etec" id="nome-etec" name="nome-etec"
                      placeholder="Nome da Instituição">
                      <option>Selecione uma Instituição</option>
                                            <?php foreach ($etec as $etec) {?>
                                                <option value="<?=$etec[0]?>"><?=$etec[1]?></option>
                                            <?php }?>
                                            </select></p>


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
            <input class="input" placeholder="conclusao"  name="conclusao" type="date"></p>

            <input type="submit" value="Adicionar Curso">
            
            <a href="formulario2.php" class="button">Proximo</a> 

        </form>
        </div>
    </div>


</body>

</html>
<script src="js/funcoes.js"></script>
