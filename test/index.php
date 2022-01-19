<?php 
    require __DIR__ . '/../lib_ext/autoload.php';

    use Notification\Email;
    
    $novoEmail = new Email(
        'mail.bmwdigital.com.br',
        'bruno@bmwdigital.com.br',
        'eavcpsksd*',
        '465',
        'bruno@bmwdigital.com.br',
        'Equipe BMW Digital'
    );

    $novoEmail->sendMail(
        "Assunto de teste", 
        "<p>Esse é um e-mail de <b>teste</b></p>",
        "bruno@bmwdigital.com.br",
        "Bruno Xavier",
        "bruno.s.xavier@hotmail.com",
        "Bruno Hotmail"
    );
?>