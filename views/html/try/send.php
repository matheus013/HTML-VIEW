<?php

$senderName     = 'matheus';
$senderEmail    = trim('matheus.bs@ic.ufal.br');
$receiverEmail = 'matheusinacio.bs@gmail.com';
$subject          = 'all';
$message          = 'test';
 
 
$messageHTML = '<P>Formulario do site.</P>
<p><b>Nome:</b> '.$senderName.'
<p><b>E-Mail:</b> '.$senderEmail.'
<p><b>Assunto:</b> '.$subject.'
<p><b>Mensagem:</b> '.$message.'</p>
<hr>';

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $senderEmail\r\n"; 
$headers .= "Return-Path: $receiverEmail \r\n"; 
$envio = mail($receiverEmail, $subject, $messageHTML, $headers); 
 
 echo "\nPIPOCA ".$envio."\n\n";
 if($envio)
    echo "sucesso"; 
?>

