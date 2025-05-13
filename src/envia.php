<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = strip_tags($_POST['nome']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    $para = "teu@email.com"; // <-- Altera aqui para o teu email real
    $assunto = "Nova mensagem do site The Same Vision";

    $corpo = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";

    $headers = "From: $nome <$email>";

    if (mail($para, $assunto, $corpo, $headers)) {
        echo "Mensagem enviada com sucesso.";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
?>
