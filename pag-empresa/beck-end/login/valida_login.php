<?php
   include('../../../dao/conexao.php');
   
    $email_empresa = $_POST['email'];
    $senha_empresa = $_POST['senha'];
    
    $querySelect = "SELECT * FROM tb_empresa WHERE email = '$email_empresa' and senha = '$senha_empresa'";
    $resultado = $conexao->query($querySelect);
    $empresa = $resultado->fetchAll();
    $n = count($empresa);


    if($n == 1){
        session_start();
        /*$_SESSION['idUsuario'] = $empresa[0]['idUsuario'];*/
        $_SESSION['email'] = $empresa[0]['email'];
        $_SESSION['senha'] = $empresa[0]['senha'];

        /*$_SESSION['imgUser'] = $empresa[0]['imgUser'];*/
        $_SESSION['autenticado'] ='SIM';
        header('Location: ../../home.php');
    }
    else{
        header('Location: login.php?login=erro');
        $_SESSION['autenticado'] = "NAO";
    }
        
    ?>