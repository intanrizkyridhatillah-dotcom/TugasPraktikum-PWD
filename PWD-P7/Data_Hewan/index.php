<?php

require_once 'Kucing.php';
require_once 'Anjing.php';

// Membuat objek Kucing
$kucing = new Kucing();
$kucing->setNama('Mochi');
$kucing->setUmur(2);

// Membuat objek Anjing
$anjing = new Anjing();
$anjing->setNama('Rex');
$anjing->setUmur(4);

$daftarHewan = [$kucing, $anjing];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Hewan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; }
        table { border-collapse: collapse; width: 60%; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Data Hewan</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis</th>
                <th>Suara</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftarHewan as $hewan): ?>
                <tr>
                    <td><?= htmlspecialchars($hewan->getNama()) ?></td>
                    <td><?= htmlspecialchars((string) $hewan->getUmur()) ?> tahun</td>
                    <td><?= htmlspecialchars($hewan->getJenis()) ?></td>
                    <td><?= htmlspecialchars($hewan->getSuara()) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>