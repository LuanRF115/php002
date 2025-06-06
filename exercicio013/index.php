<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>
    <h2>Gerador de Tabuada</h2>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Exibir Tabuada</button>
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = $_POST["numero"];
 
        if (is_numeric($numero)) {
            echo "<h3>Tabuada do número " . htmlspecialchars($numero) . "</h3>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<li>$numero x $i = $resultado</li>";
            }
            echo "</ul>";
        } else {
            echo "<p style='color: red;'>Por favor, insira um número válido.</p>";
        }
    }
    ?>
</body>
</html>