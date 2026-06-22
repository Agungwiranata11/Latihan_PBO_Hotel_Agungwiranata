<?php
// KamarDeluxe.php
require_once 'Reservasi.php';

class KamarDeluxe extends Reservasi {
    private $aksesKolamRenang;
    private $minibarStock;

    public function __construct($id_reservasi, $nomor_kamar, $nama_tamu, $durasi_menginap, $harga_per_malam, $aksesKolamRenang, $minibarStock) {
        parent::__construct($id_reservasi, $nomor_kamar, $nama_tamu, $durasi_menginap, $harga_per_malam);
        $this->aksesKolamRenang = $aksesKolamRenang;
        $this->minibarStock = $minibarStock;
    }

    // TAHAP 5: Method Overriding untuk Kamar Deluxe
    public function hitungTotalBiaya() {
        return ($this->durasi_menginap * $this->harga_per_malam) + 200000;
    }

    public function tampilkanFasilitasLayanan() {
        echo "Fasilitas Kamar Deluxe:<br>";
        echo "- Akses Kolam Renang: " . ($this->aksesKolamRenang ?? "Tidak Ada") . "<br>";
        echo "- Minibar Stock: " . ($this->minibarStock ?? "Tidak Ada") . "<br>";
    }
}
?>