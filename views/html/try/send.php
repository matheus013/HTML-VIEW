<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$senderName     = 'matheus';
$senderEmail    = trim('matheus.bs@ic.ufal.br');
$receiverEmail = 'matheusinacio.bs@gmail.com'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$subject          = 'all';
$message          = 'test';
 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$messageHTML = '<P>Formulario do site.</P>
<p><b>Nome:</b> '.$senderName.'
<p><b>E-Mail:</b> '.$senderEmail.'
<p><b>Assunto:</b> '.$subject.'
<p><b>Mensagem:</b> '.$message.'</p>
<hr>';
// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $senderEmail\r\n"; // remetente
$headers .= "Return-Path: $receiverEmail \r\n"; // return-path
$envio = mail($receiverEmail, $subject, $messageHTML, $headers); 
 
 if($envio)
    echo "sucesso"; // Página que será redirecionada
?>

