<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Perkalian Matriks</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        table {
            border-collapse: collapse;
            font-weight: bold;
            border: 2px solid #333;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: center;
        }
        /* Warna Hijau Terang untuk Header */
        .bg-hijau { 
            background-color: #00FF00; 
            color: black; 
        }
        /* Warna Kuning untuk Kolom Genap */
        .bg-kuning { 
            background-color: #FFFF00; 
            color: black; 
        }
        /* Warna Cyan/Biru Muda untuk Kolom Ganjil */
        .bg-cyan { 
            background-color: #00FFFF; 
            color: black; 
        }
    </style>
</head>
<body>

    <p>2) Buatlah sebuah tabel perkalian matriks dengan menggunakan pengulangan sehingga berbentuk seperti gambar dibawah ini[cite: 3]:</p>
    <br>

    <table>
        <!-- Baris Header Atas (Kolom 1 sampai 10) -->
        <tr>
            <th class="bg-hijau" style="background-color: white;">bilangan</th>
            <?php for ($j = 1; $j <= 10; $j++): ?>
                <th class="bg-hijau"><?= $j; ?></th>
            <?php endfor; ?>
        </tr>

        <!-- Baris Isi Matriks dan Header Samping -->
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <tr>
                <!-- Header Samping (1 sampai 10) -->
                <th class="bg-hijau"><?= $i; ?></th>
                
                <?php for ($j = 1; $j <= 10; $j++): ?>
                    <?>
                    <?php 
                        $hasil = $i * $j; // Menghitung perkalian matriks
                        
                        // Kolom ganjil (1, 3, 5, dst) warna cyan, kolom genap (2, 4, 6, dst) warna kuning
                        $warna = ($j % 2 != 0) ? "bg-cyan" : "bg-kuning";
                    ?>
                    <td class="<?= $warna; ?>"><?= $hasil; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>
</html>