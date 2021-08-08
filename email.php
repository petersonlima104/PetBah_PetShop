<?php

    if(isset($_POST['email'] && !empty($_POST['email']))){

    $nome = addcslashes($_POST['name'])
    $email = addcslashes($_POST['email'])
    $mensagem = addcslashes($_POST['message'])

    $to = "petbahstore@gmail.com";
    $subject = "Mensagem enviada pelo site PETBAH";
    $body = "Nome: ".$nome. "\n".
            "Email: ".$email. "\n".
            "Mensagem: ".$mensagem;
    $header = "From:petbahstore@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

    if(mail($To, $subject, $body, $header)){
        echo("Email enviado com sucesso!");
    }else{
        echo("Erro ao enviar a mensagem, entre em contato conosco através da aba Contatos!");
    }
}
?>