<?php
// index.php

// 1. Ambil semua file dependensi yang dibutuhkan
require_once 'config/Database.php';
require_once 'Reservasi.php';
require_once 'KamarStandard.php';
require_once 'KamarDeluxe.php';
require_once 'KamarSuite.php';

// 2. Inisialisasi Koneksi Database
$database = new Database();
$db = $database->getConnection();

// 3. Ambil data dari tabel_reservasi
$query = "SELECT * FROM tabel_reservasi";
$stmt = $db->prepare($query);
$stmt->execute();

// Tempat menampung objek berdasarkan kelompok tipe kamar
$kelompok_kamar = [
    'Standard' => [],
    'Deluxe'   => [],
    'Suite'    => []
];

// 4. Proses Mapping data Relasional Database menjadi Objek OOP (Polimorfisme)
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $tipe = $row['tipe_kamar'];
    
    if ($tipe == 'Standard') {
        $kelompok_kamar['Standard'][] = new KamarStandard(
            $row['id_reservasi'], $row['nomor_kamar'], $row['nama_tamu'], 
            $row['durasi_menginap'], $row['harga_per_malam'],
            $row['fasilitas_sarapan'], $row['pemandangan_kamar']
        );
    } elseif ($tipe == 'Deluxe') {
        $kelompok_kamar['Deluxe'][] = new KamarDeluxe(
            $row['id_reservasi'], $row['nomor_kamar'], $row['nama_tamu'], 
            $row['durasi_menginap'], $row['harga_per_malam'],
            $row['akses_kolam_renang'], $row['minibar_stock']
        );
    } elseif ($tipe == 'Suite') {
        $kelompok_kamar['Suite'][] = new KamarSuite(
            $row['id_reservasi'], $row['nomor_kamar'], $row['nama_tamu'], 
            $row['durasi_menginap'], $row['harga_per_malam'],
            $row['layanan_jacuzzi'], $row['layanan_jemput_bandara']
        );
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Antarmuka Reservasi Hotel</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f6f9; }
        h1 { color: #333; text-align: center; }
        h2 { color: #2c3e50; margin-top: 40px; border-bottom: 2px solid #2c3e50; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        th, td { padding: 12px; text-align: left; border: 1px solid #ddd; }
        th { background-color: #2c3e50; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .harga { text-align: right; font-weight: bold; }
    </style>
</head>
<body>

    <h1>Sistem Manajemen Antarmuka Reservasi Hotel</h1>

    <?php foreach ($kelompok_kamar as $tipe_kamar => $daftar_reservasi): ?>
        <h2>Kategori Kamar: <?= $tipe_kamar ?></h2>
        
        <?php if (empty($daftar_reservasi)): ?>
            <p>Tidak ada data reservasi untuk tipe ini.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>No Kamar</th>
                        <th>Nama Tamu</th>
                        <th>Durasi</th>
                        <th>Harga / Malam</th>
                        <th>Spesifikasi Fasilitas Unik (Polimorfik)</th>
                        <th>Total Biaya (Polimorfik)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($daftar_reservasi as $reservasi): ?>
                        <tr>
                            <td><?= $reservasi->getIdReservasi(); ?></td>
                            <td><?= $reservasi->getNomorKamar(); ?></td>
                            <td><?= $reservasi->getNamaTamu(); ?></td>
                            <td><?= $reservasi->getDurasiMenginap(); ?> Hari</td>
                            <td>Rp <?= number_format($reservasi->getHargaPerMalam(), 0, ',', '.'); ?></td>
                            <td>
                                <?php 
                                    // Memanfaatkan METODE POLIMORFIK untuk mencetak atribut unik
                                    $reservasi->tampilkanFasilitasLayanan(); 
                                ?>
                            </td>
                            <td class="harga">
                                Rp <?= number_format($reservasi->hitungTotalBiaya(), 2, ',', '.') ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    <?php endforeach; ?>

</body>
</html>