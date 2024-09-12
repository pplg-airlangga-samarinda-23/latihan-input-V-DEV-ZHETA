<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
</head>
<body>
    <h1>Soal 2</h1>
    <form method="post">
        <label for="distance">Masukkan jarak (KM):</label>
        <input type="number" id="distance" name="distance" step="any" required>
        
        <label for="conversion">Pilih konversi:</label>
        <select id="conversion" name="conversion" required>
            <option value="km_to_m">KM ke M</option>
            <option value="km_to_cm">KM ke CM</option>
            <option value="km_to_mm">KM ke MM</option>
        </select>
        
        <button type="submit">Konversi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $distance = isset($_POST['distance']) ? floatval($_POST['distance']) : 0;
        $conversion = isset($_POST['conversion']) ? $_POST['conversion'] : '';

        // Perform the conversion
        $result = '';
        switch ($conversion) {
            case 'km_to_m':
                $result = $distance * 1000;
                echo "<p>{$distance} KM = {$result} M</p>";
                break;
            case 'km_to_cm':
                $result = $distance * 100000;
                echo "<p>{$distance} KM = {$result} CM</p>";
                break;
            case 'km_to_mm':
                $result = $distance * 1000000;
                echo "<p>{$distance} KM = {$result} MM</p>";
                break;
            default:
                echo "<p>Pilih jenis konversi yang valid.</p>";
                break;
        }
    }
    ?>
</body>
</html>
