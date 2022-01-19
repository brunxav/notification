<?php
    namespace Notification;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

class Email
{

    private $mail = \stdClass::class;

    public function __construct($host, $user, $pass, $port, $setFromEmail, $setFromName)
    {
        $this->mail = new PHPMailer(true);

        //Server settings
        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $this->mail->isSMTP();
        $this->mail->Host       = $host; //'mail.bmwdigital.com.br';
        $this->mail->SMTPAuth   = true;
        $this->mail->Username   = $user; //'bruno@bmwdigital.com.br';
        $this->mail->Password   = $pass; //'eavcpsksd*';
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $this->mail->Port       = $port; //465;
        $this->mail->CharSet    = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom($setFromEmail, $setFromName);
        // $this->mail->setFrom('bruno@bmwdigital.com.br', 'Equipe BMW Digital');
    }

    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName)
    {
        $this->mail->Subject = (string) $subject;
        $this->mail->Body = (string) $body;
        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);

        try{
            $this->mail->send();
        }catch(Exception $e){
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }

        echo "E-mail enviado !";
    }
}