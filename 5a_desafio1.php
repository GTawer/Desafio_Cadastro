<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permissão de Acesso 🔞</title>
</head>
<h1>Por favor, confirme sua idade para solicitar o acesso à página 🔞</h1>
<body>
    <form action="" method="post">
        <label for="nome">Nome:</label><p>
        <input type="text" name="nome" required><br><br>

        <label for="ano">Ano de nascimento:</label><p>
        <input type="number" name="ano" required><br><br>
        <button type="submit">Continuar</button><br><br>
         <img src="https://i.pinimg.com/736x/35/30/84/3530849678cba3a642f2bebdc078f791.jpg" alt="Gif de restrição de idade" width="300">
    </form>
    
    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os dados do formulário (apenas o que existe no HTML)
        $nome = $_POST["nome"];
        $ano = (int)$_POST["ano"];

        // 1. Calcula a idade com o ano atual
        $anoAtual = (int)date('Y');
        $idade = $anoAtual - $ano;

        // 2. Verifica se tem 18 anos ou mais
        if ($idade >= 18) {
            // Exibe a mensagem de sucesso 
            echo "<p style='color: green;'>Acesso permitido, " . ($nome) . "!</p>";
            echo "<script>alert('Acesso permitido, " . ($nome) . "!');</script>";

        } else {
            // Exibe a mensagem de negação 
            
            echo "<p style='color: red;'>Acesso negado, " . ($nome) . "!</p>";
            echo "<script>alert('Acesso negado, " . ($nome) . "!');</script>";
        }
    }
    ?>

