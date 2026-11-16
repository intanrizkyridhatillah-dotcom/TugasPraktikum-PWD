<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Pengulangan Genap</title>
</head>
<body>

    <h3>Bilangan yang bernilai genap</h3>
    <p>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
        ?>
    </p>

</body>
</html>