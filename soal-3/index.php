<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>
<body>
    <h1>Soal 3</h1>

    <form method="post">
        <label for="num1">Angka 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        
        <label for="num2">Angka 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        
        <label>Operasi:</label>
        <br>
        <input type="radio" id="addition" name="operation" value="add" checked>
        <label for="addition">Penjumlahan</label>
        <br>
        <input type="radio" id="subtraction" name="operation" value="subtract">
        <label for="subtraction">Pengurangan</label>
        <br>
        <input type="radio" id="multiplication" name="operation" value="multiply">
        <label for="multiplication">Perkalian</label>
        <br>
        <input type="radio" id="division" name="operation" value="divide">
        <label for="division">Pembagian</label>
        <br><br>
        
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        
        $result = '';
        
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                $operationText = 'Penjumlahan';
                break;
            case 'subtract':
                $result = $num1 - $num2;
                $operationText = 'Pengurangan';
                break;
            case 'multiply':
                $result = $num1 * $num2;
                $operationText = 'Perkalian';
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    $operationText = 'Pembagian';
                } else {
                    $result = 'Tidak dapat membagi dengan nol';
                    $operationText = 'Pembagian';
                }
                break;
        }

        echo "<h2>Hasil $operationText</h2>";
        echo "<p>$num1 " . ($operation == 'add' ? '+' : ($operation == 'subtract' ? '-' : ($operation == 'multiply' ? '*' : '/'))) . " $num2 = $result</p>";
    }
    ?>

</body>
</html>
