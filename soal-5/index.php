<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 1</title>
</head>
<body>
    <h1>Soal 1</h1>
    <form method="post">
        <input type="number" name="jarijari"> <br>
        <input type="number" name="tinggi"> <br>
        <button type="submit">Hitung Volume</button>
        <button type="reset">Reset</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jarijari = $_POST['jarijari'];
            $tinggi = $_POST['tinggi'];

            if (is_numeric($jarijari) && is_numeric($tinggi) && $jarijari > 0 && $tinggi > 0) { 
                $volume = pi() * pow($jarijari, 2) * $tinggi;
                echo "<h2>Volume Tabung</h2>";
                echo "<p>Jari-jari: " . htmlspecialchars($jarijari) . "</p>";
                echo "<p>Tinggi: " . htmlspecialchars($tinggi) . "</p>";
                echo "<p>Volume: " . number_format($volume, 2) . " satuan kubik</p>";
            } else {
                echo "<p>Silakan masukkan nilai yang valid untuk jari-jari dan tinggi.</p>";
            }
        }
    ?>
</body>
</html>