<?php
    include('../../../dao/conexao.php');
    require('funcoes.php');
    //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
    if($_POST) {
        //passando todos os itens do post para as sua variaveis
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $cnpj = trim($_POST['cnpj']);
        $cep = trim($_POST['cep']);
        $logradouro = trim($_POST['logradouro']);
        $numero = trim($_POST['numero']);
        $bairro = trim($_POST['bairro']);
        $estado =trim($_POST['estado']);

        $isCnpjValido = validar_cnpj($cnpj);
      /*  $formattedCNPJ = formatCNPJ($cnpj);*/

        if($isCnpjValido == true){

            $cnpj = preg_replace('/\D/', '', $cnpj); // Remove caracteres não numéricos
            $mask = '##.###.###/####-##';
            
            $cnpjFormatted = '';
            $j = 0;
            
            for ($i = 0; $i < strlen($mask); $i++) {
                if ($mask[$i] === '#') {
                    $cnpjFormatted .= $cnpj[$j];
                    $j++;
                } else {
                    $cnpjFormatted .= $mask[$i];
                }
            }
        
        $sql = "
        INSERT INTO tb_empresa (email , senha , nome , cnpj, cep , logradouro , numero , bairro , estado) VALUES
        (   '$email',
            '$senha',
            '$nome',
            '$cnpjFormatted',
            '$cep',
            '$logradouro',
            '$numero',
            '$bairro',
            '$estado'
        )
        ";
        $query = $conexao->prepare($sql);
        $query->execute();
        
        header('Location: ../../../one-page/index.html');
        exit;
        }
        else if($isCnpjValido == false){
            header('Location: login.php?login=erro');
            $_SESSION['autenticado'] = "NAO";
        }
    }
    else{
        header('Location: login.php?login=erro');
            $_SESSION['autenticado'] = "NAO";
    }
        
?>