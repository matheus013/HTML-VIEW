<?php

$senderName = $_POST['senderName'];
$senderEmail = trim($_POST['senderEmail']);
$receiverEmail = 'matheusinacio.bs@gmail.com'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$subject = $_POST['subject'];
$message = $_POST['message'];


$messageHTML = '<P>Formulario do site.</P>
<p><b>Nome:</b> ' . $senderName . '
<p><b>E-Mail:</b> ' . $senderEmail . '
<p><b>Assunto:</b> ' . $subject . '
<p><b>Mensagem:</b> ' . $message . '</p>
<hr>';

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $senderEmail\r\n"; // remetente
$headers .= "Return-Path: $receiverEmail \r\n"; // return-path
$envio = mail($receiverEmail, $subject, $messageHTML, $headers);

if ($envio)
    echo "<script>location.href='http://fb.com/'</script>"; // Página que será redirecionada
?>
