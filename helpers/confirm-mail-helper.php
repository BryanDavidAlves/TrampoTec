<?php
require 'phpmailer-helper.php';

$to = $_POST['email'];
$template = $_POST['template'] ?? '../templates/confirm-your-mail.html';

if(sendMail('Confirme seu email', str_replace('@user_mail', $to, file_get_contents($template)), $to)){
    echo json_encode(array('icon' => 'success', 'title' => 'Email enviado!', 'text' => 'Siga as instruções do e-mail para concluir seu cadastro.'));
}else{
    echo json_encode(array('icon' => 'error', 'title' => 'Ops...', 'text' => 'Não foi possível enviar o email. Tente novamente em breve.'));
}
exit;
