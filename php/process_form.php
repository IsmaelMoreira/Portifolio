<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Endereço de e-mail para onde você quer enviar o formulário
    $to = 'moreiraismael14@gmail.com';
    
    // Assunto do e-mail
    $subject = 'Novo formulário de contato recebido';
    
    // Corpo do e-mail
    $body = "Nome: $name\n";
    $body .= "Email: $email\n";
    $body .= "Mensagem:\n$message";
    
    // Cabeçalhos adicionais
    $headers = "From: $email\r\n";
    
    // Enviar o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo 'E-mail enviado com sucesso!';
    } else {
        echo 'Erro ao enviar o e-mail.';
    }
}
?>
