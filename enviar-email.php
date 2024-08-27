<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    // Endereço de e-mail do destinatário
    $to = 'marcos@alphalumen.org.br';

    // Assunto do e-mail
    $subject = 'Formulário de Contato';

    // Corpo do e-mail
    $body = "Nome: $nome\n";
    $body .= "Email: $email\n";
    $body .= "Telefone: $telefone\n";
    $body .= "Mensagem:\n$mensagem\n";

    // Cabeçalhos do e-mail
    $headers = "From: $email";

    // Envia o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo '<p>Mensagem enviada com sucesso!</p>';
    } else {
        echo '<p>Falha ao enviar a mensagem. Tente novamente.</p>';
    }
}
?>
