<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Saudação</title>
</head>
<body>
    <h2>Digite seu nome:</h2>
    <form method="post" action="">
        <input type="text" name="nome" required>
        <button type="submit">Enviar</button>
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome'])) {
        $nome = htmlspecialchars($_POST['nome']); // evita código malicioso
        echo "<h3>Olá, {$nome}!</h3>";
    }
    ?>
</body>
</html>