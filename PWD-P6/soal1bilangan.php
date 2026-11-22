<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Pengulangan Genap</title>
</head>
<body>

    <h3>Latihan</h3>
    <p>1) Buatlah sebuah pengulangan 1 sampai 10, kemudian tampilkan data yang hanya bernilai genap.</p>
    <p>
        <?php
        // Perulangan for dari 1 sampai 10
        for ($i = 1; $i <= 10; $i++) {
            // Cek apakah angka habis dibagi 2 (genap)
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
        ?>
    </p>

</body>
</html>