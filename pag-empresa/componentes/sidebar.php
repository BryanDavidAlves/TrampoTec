<?php
include '../dao/conexao.php';

require_once "./beck-end/login/validador_acesso.php";

// Pega o ID do cliente logado
$cliente_id = $_SESSION['idEmpresa'];

$querySelect = "SELECT * FROM  tb_empresa WHERE idEmpresa = $cliente_id";

$query = $conexao->query($querySelect);

$resultados = $query->fetchAll();

?>
<header class="side-bar">
    <nav>
        <div class="imagem-logo">
            <img src="img/trampotec.png" alt="">
        </div>
        <div class="imagem-empresa">
            <a href="../pag-empresa/perfil.php">
                <?php foreach ($resultados as $resultados) {?> <img src="fotosEmpresa/perfil/<?=$resultados[13]?>">
                <?php }?>
                <i class="icon-foto fa-solid fa-caret-right"></i>
            </a>
        </div>
        <ul>
            <div class="coluna-um">
                <li><a href="../pag-empresa/dash.php"><i class="fa-solid fa-house"></i> Dashboard</a></li>
              <!--  <li><a href="../pag-empresa/home.php"><i class="fa-solid fa-house"></i> Home</a></li>-->
                <li> <a href="../pag-empresa/candidatos.php"><i class="fa-solid fa-user"></i> Candidatos</a></li>
                <li><a href="../pag-empresa/vagas.php"><i class="fa-solid fa-bag-shopping"></i> Vagas</a></li>

             
                 <li><a href="../pag-empresa/configuracoes.php"><i class="fa-solid fa-gear fa-lg"></i> Configurações</a></li>

              
              

                
                <li><a href="./beck-end/login/logout.php"><i class="fa-solid fa-door-open"></i> Logout</a></li>
            </div>
        </ul>
    </nav>
</header>