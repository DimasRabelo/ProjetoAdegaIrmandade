<?php
//Importe classes PHPMailer para o namespace global
//Eles devem estar no topo do seu script, não dentro de uma função
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$ok = 0;



if (isset($_POST['email'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $mens = $_POST['mens'];
    $assunto = 'site adega irmandade';

    require_once('admin/class/contato.php');

    $contato = new ContatoClass();

    $contato->nomeContato = $nome;
    $contato->emailContato = $email;
    $contato->telefoneContato = $fone;
    $contato->mensagemContato = $mens;

    $contato->Inserir();

    require_once('mailer/Exception.php');
    require_once('mailer/PHPMailer.php');
    require_once('mailer/SMTP.php');

    //Crie uma instância; passar `true (verdadeiro)`
    $mail = new PHPMailer(true);


    try {
        //Configurações do servidor
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Habilita saída de depuração detalhada
        $mail->isSMTP();                                            //Enviar usando SMTP
        $mail->Host       = 'smtp.hostinger.com';                   //Defina o servidor SMTP para enviar
        $mail->SMTPAuth   = true;                                   //Habilitar autenticação SMTP
        $mail->Username   = 'contato@adegairmandade.smpsistema.com.br';       //SMTP nome de usuário
        $mail->Password   = 'Senac@Adega01';                           //SMTP senha
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Habilitar criptografia TLS implícita
        $mail->Port       = 465;                                    //Porta TCP para conexão

        //Destinatários
        $mail->setFrom('contato@adegairmandade.smpsistema.com.br', $assunto);            // Quem dispara o email
        $mail->addAddress('adegairmandadeloungetabacaria@gmail.com');     //Adicionar um destinatário


        //Conteúdo do email
        $mail->isHTML(true);                                          //Defina o formato do e-mail para HTML
        $mail->Subject = &$assunto;

        //Conteúdo HTML
        $mail->Body    = "        
            <strong>Nome: </strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $fone <br>
            <strong>Mensagem:</strong> $mens
        ";
        //Sem formatação HTML
        $mail->AltBody = "
            <strong>Nome: </strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $fone <br>
            <strong>Mensagem:</strong> $mens
        ";

        $mail->send();
        //echo 'Email enviado com Sucesso!';
        $ok = 1;
    } catch (Exception $e) {
        //echo "Error: {$mail->ErrorInfo}";
        $ok = 2;
    }
}
?>

