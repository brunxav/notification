<?php 
    require __DIR__ . '/lib_ext/autoload.php';

    use Notification\Email;
    
    $novoEmail = new Email;
    $novoEmail->sendMail(
        "Assunto de teste", 
        "<p>Esse é um e-mail de <b>teste</b></p>",
        "bruno@bmwdigital.com.br",
        "Bruno Xavier",
        "bruno.s.xavier@hotmail.com",
        "Bruno Hotmail"
    );
?>