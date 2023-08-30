<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception as PhpmailerException;

//Load Composer's autoloader
require 'lib/vendor/autoload.php';

class email{
    
//credenciais smtp

const HOST = 'smtp.gmail.com';
const user = 'alpha01technology@gmail.com';
const pass = 't&chnologyAlpha'; 
const secure = 'TLS';
const port = '587';
const charset = 'UTF-8';

//Remetende de quem esta enviando a porra do email filha da punta
const name = 'TrampoTec';
const From_Email ='alpha01technology@gmail.com';

private $erro;

public function getError(){
    return $this->error;
}
/**
 * @param string/array $addresses
 * @param string $body
 * @param string/array $attachments
 * @param string/array $ccs 
 * @param string/array $bccs
 * @return boolean
 */

public function sendEmail($addresses,$subject,$body,$attachments = [], $ccs = [],$bccs = []){
    //limpar mensagem de erro 

    $tris ->error = '';

    //instanciar Phpmailer
    //(true) para executar as exceptions
    $mail = new PHPMailer(true);

    try{
        //credenciais de acesso ao smtp
        $mail->isSMTP(true);
        $mail->Host = self::HOST; 
        $mail->SMTPAuth   = true;
        $mail->Username   = self::user;
        $mail->Password   = self::pass;
        $mail->SMTPSecure = self::secure;
        $mail->Port       = self::port; 
        $mail->CharSet = self::charset ;

        //remente 
        $mail->setFrom(self::From_Email, self::name);

        //destinatario
       
        $addresses = is_array($addresses) ? $addresses : [$addresses];
        foreach($addresses as $address){
            $mail->addAddress($address);
        }

        //anexos
        $attachments = is_array($attachments) ? $attachments : [$attachments];
        foreach($attachments as $attachment){
            $mail->addAttachment($attachment);
        }
        //CC
        $ccs = is_array($ccs) ? $ccs : [$ccs];
        foreach($ccs as $cc){
            $mail->addCC($cc);
        }
        //BCC
        $bccs = is_array($bccs) ? $bccs : [$bccs];
        foreach($bccs as $bcc){
            $mail->addBCC($bcc);
        }

        //conteudo do email
        $mail->isHTML(true);
        $mail->Subject = 'Confirmar o E-mail Instirucional';
        $mail->Body    = "Prezado(a) Aluno " . ".<br><br> Agradecemos a sua solicitacao de cadastramento em nosso site 
        <br><br> Para que possamos liberar o seu cadastro em nosso sistema, solicitamos a confirmação do e-mail institucional da etec clicando no link
        abaixo <br><br> <a href = 'http://localhost/TrampoTec/pag-aluno/cadastro.php?chave='>Clique Aqui <a/> <b><br>
        esta mensagem foi enviado(a) pela empresa Alpha Tecnology em nosso software TrampoTec <br><br> Desde ja agradecemos";




    }catch(PhpmailerException $e ){
        $this->error = $e->getMessage();
        return false;

    }

}

}

try {
        //configuracoes do servidor
        //utilizei um serv provisorio
        
        print_r($_POST);
        
       

        //QUEM ESTA ENVIANDO
        $mail->setFrom('TrampoTec@gmail.com', 'RuanCEO');
        //quem esta recebendo
        //


                                       //Set email format to HTML
        
        $mail->Body    = "Prezado(a) Aluno " . ".<br><br> Agradecemos a sua solicitacao de cadastramento em nosso site 
        <br><br> Para que possamos liberar o seu cadastro em nosso sistema, solicitamos a confirmação do e-mail institucional da etec clicando no link
        abaixo <br><br> <a href = 'http://localhost/TrampoTec/pag-aluno/cadastro.php?chave='>Clique Aqui <a/> <b><br>
        esta mensagem foi enviado(a) pela empresa Alpha Tecnology em nosso software TrampoTec <br><br> Desde ja agradecemos";
        
        
        $mail->AltBody = "Prezado(a) Aluno " . "./n/nAgradecemos a sua solicitacao de cadastramento em nosso site 
        ./n/nPara que possamos liberar o seu cadastro em nosso sistema, solicitamos a confirmação do e-mail institucional da etec clicando no link
        abaixo /n/n<a href = 'http://localhost/TrampoTec/pag-aluno/cadastro.php?chave='>Clique Aqui <a/>/n/n
        esta mensagem foi enviado(a) pela empresa Alpha Tecnology em nosso software TrampoTec /n/nDesde ja a casa agradece meu chapaaaaa(Maconheiro)";
    
        $mail->send();

        echo"usuario abra sua caixa de email";

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

$emailInstitucional = $_POST['email'];
//print_r($_POST);

//if(empty($emailInstitucional['email-aluno'])){
  //  echo "variavel vazia";
//}


  //


?>