<?php
// KamarDeluxe.php
require_once 'Reservasi.php';

class KamarDeluxe extends Reservasi {
    // Properti tambahan spesifik
    private $aksesKolamRenang;
    private $minibarStock;

    public function __construct($id_reservasi, $nomor_kamar, $nama_tamu, $durasi_menginap, $harga_per_malam, $aksesKolamRenang, $minibarStock) {
        parent::__construct($id_reservasi, $nomor_kamar, $nama_tamu, $durasi_menginap, $harga_per_malam);
        $this->aksesKolamRenang = $aksesKolamRenang;
        $this->minibarStock = $minibarStock;
    }

    public function hitungTotalBiaya() {
        return $this->durasi_menginap * $this->harga_per_malam;
    }

    public function tampilkanFasilitasLayanan() {
        echo "Fasilitas Kamar Deluxe:<br>";
        echo "- Akses Kolam Renang: " . ($this->aksesKolamRenang ?? "Tidak Ada") . "<br>";
        echo "- Minibar Stock: " . ($this->minibarStock ?? "Tidak Ada") . "<br>";
    }
}
?>