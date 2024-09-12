<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Umur</title>
</head>
<body>
    <h1>Hitung Umur</h1>

    <form method="post" action="">
        <label for="birthdate">Tanggal Lahir:</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <input type="submit" value="Hitung Umur">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birthdate = $_POST['birthdate'];

        if (!empty($birthdate)) {
            $birthDate = new DateTime($birthdate);
            $today = new DateTime('today');
            $age = $today->diff($birthDate)->y;
            
            echo "<p>Umur Anda adalah: $age tahun</p>";
        } else {
            echo "<p>Harap masukkan tanggal lahir.</p>";
        }
    }
    ?>
</body>
</html>
