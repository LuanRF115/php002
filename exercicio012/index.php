<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Validação de Dados</title>
</head>
<body>
    <h2>Informe seus dados</h2>
    <form method="post" action="">
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" required><br><br>
 
        <label for="altura">Altura (em metros):</label>
        <input type="text" name="altura" id="altura" required placeholder="Ex: 1.75"><br><br>
 
        <button type="submit">Enviar</button>
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $idade = $_POST["idade"];
        $altura = $_POST["altura"];
 
        if (is_numeric($idade) && is_numeric($altura)) {
            echo "<h3>Você informou:</h3>";
            echo "<p>Idade: " . htmlspecialchars($idade) . " anos</p>";
            echo "<p>Altura: " . htmlspecialchars($altura) . " metros</p>";
        } else {
            echo "<p style='color: red;'>Por favor, preencha os campos corretamente com valores numéricos.</p>";
        }
    }
    ?>
</body>
</html>