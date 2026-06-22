<?php
// KamarStandard.php
require_once 'Reservasi.php';

class KamarStandard extends Reservasi {
    // Properti tambahan spesifik
    private $fasilitasSarapan;
    private $pemandanganKamar;

    public function __construct($id_reservasi, $nomor_kamar, $nama_tamu, $durasi_menginap, $harga_per_malam, $fasilitasSarapan, $pemandanganKamar) {
        // Memanggil constructor class induk (Reservasi)
        parent::__construct($id_reservasi, $nomor_kamar, $nama_tamu, $durasi_menginap, $harga_per_malam);
        $this->fasilitasSarapan = $fasilitasSarapan;
        $this->pemandanganKamar = $pemandanganKamar;
    }

    // Implementasi method abstrak hitungTotalBiaya
    public function hitungTotalBiaya() {
        return $this->durasi_menginap * $this->harga_per_malam;
    }

    // Implementasi method abstrak tampilkanFasilitasLayanan
    public function tampilkanFasilitasLayanan() {
        echo "Fasilitas Kamar Standard:<br>";
        echo "- Sarapan: " . ($this->fasilitasSarapan ?? "Tidak Termasuk") . "<br>";
        echo "- Pemandangan: " . ($this->pemandanganKamar ?? "Tidak Ada") . "<br>";
    }
}
?>