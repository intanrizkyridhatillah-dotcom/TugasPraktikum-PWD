<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Perkalian Matriks</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            margin: 30px;
        }
        table {
            border: 1px solid #888;
        }
        th, td {
            padding: 3px 6px;
            text-align: left;
            font-weight: normal;
        }
        .bg-hijau { 
            background-color: #00FF00; 
            color: black; 
        }
        .bg-kuning { 
            background-color: #FFFF00; 
            color: black; 
        }
        .bg-cyan { 
            background-color: #00FFFF; 
            color: black; 
        }
    </style>
</head>
<body>

    <table border="1">
        <tr>
            <td>bilangan</td>
            <?php for ($j = 1; $j <= 10; $j++): ?>
                <td class="bg-hijau"><?= $j; ?></td>
            <?php endfor; ?>
        </tr>

        <?php for ($i = 1; $i <= 10; $i++): ?>
            <tr>
                <td class="bg-hijau"><?= $i; ?></td>
                
                <?php for ($j = 1; $j <= 10; $j++): ?>
                    <?php 
                        $hasil = $i * $j;
                        $warna = ($hasil % 2 != 0) ? "bg-kuning" : "bg-cyan";
                    ?>
                    <td class="<?= $warna; ?>"><?= $hasil; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>
</html>