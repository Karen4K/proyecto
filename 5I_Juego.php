<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palabrasUsadas = json_decode($_POST['palabrasUsadas'], true);
    $resultados = [];

    for ($i = 1; $i <= 9; $i++) {
        $campo = 'p' . $i;
        if (isset($_POST[$campo])) {
            $valor = trim($_POST[$campo]);
            if (in_array($valor, $palabrasUsadas)) {
                $resultados[$campo] = "Palabra $i es correcta: " . htmlspecialchars($valor);
            } else {
                $resultados[$campo] = "Palabra $i es incorrecta: " . htmlspecialchars($valor);
            }
        } else {
            $resultados[$campo] = "Palabra $i no fue ingresada.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultados del Juego</title>
</head>
<body>
    <h1>Resultados del Juego</h1>
    <?php
    if (!empty($resultados)) {
        foreach ($resultados as $resultado) {
            echo "<p>$resultado</p>";
        }
    } else {
        echo "<p>No se recibieron datos.</p>";
    }
    ?>
</body>
</html>
