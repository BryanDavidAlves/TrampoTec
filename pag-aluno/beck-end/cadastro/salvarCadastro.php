<?php include('../../../dao/conexao.php');
require('funcoes.php');
//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    $nome = trim($_POST['nome-aluno']);
    $cpf = trim($_POST['cpf-aluno']);
    $dtNascimento = trim($_POST['nasc-aluno']);
    $etecNome = trim($_POST['nome-etec']);
    $senha = trim($_POST['senha-aluno']);
    $cep = trim($_POST['cep-aluno']);
    $telAluno = trim($_POST['tel-aluno']);
    $repetirSenha = trim($_POST['repita-senha']);

    $cpfValidado = validarCPF($cpf);
    $senhaForte = isStrongPassword($senha);
    $formattedPhoneNumber = formatPhoneNumber($telAluno);

    $senhaoficial = senhasIguais($senha, $repetirSenha);



    if ($formattedPhoneNumber == false) {
        header('Location: ../../cadastro.php?login=numeroInvalido');
    } else if ($senhaForte == false) {
        header('Location: ../../cadastro.php?login=senhaFraca');
    } else if ($cpfValidado == false) {
        header('Location: ../../cadastro.php?login=cpfInvalido');
    } else if ($senhaoficial == false) {
        header('Location: ../../cadastro.php?login=senhasDiferentes');
    } else if (/*$formattedPhoneNumber == true ||*/ $senhaForte == true || $cpfValidado == true || $senhaoficial == true) {
        $cpfFormatado = formatarCPF($cpf);
        
        $sql = "INSERT INTO tb_aluno (senha , nome , cpf, dtNasc , cep ) VALUES
        (   '$senha',
            '$nome',
            '$cpfFormatado',
            '$dtNascimento',
            '$cep'
        )
        ";
$query = $conexao->prepare($sql);
$query->execute();

header('Location: ../../../one-page/index.html');
exit;
    }


}
?>