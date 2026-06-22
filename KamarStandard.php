<?php
// KamarStandard.php
require_once 'Reservasi.php';

class KamarStandard extends Reservasi {
    private $fasilitasSarapan;
    private $pemandanganKamar;

    public function __construct($id_reservasi, $nomor_kamar, $nama_tamu, $durasi_menginap, $harga_per_malam, $fasilitasSarapan, $pemandanganKamar) {
        parent::__construct($id_reservasi, $nomor_kamar, $nama_tamu, $durasi_menginap, $harga_per_malam);
        $this->fasilitasSarapan = $fasilitasSarapan;
        $this->pemandanganKamar = $pemandanganKamar;
    }

    // TAHAP 5: Method Overriding untuk Kamar Standard
    public function hitungTotalBiaya() {
        return $this->durasi_menginap * $this->harga_per_malam;
    }

    public function tampilkanFasilitasLayanan() {
        echo "Fasilitas Kamar Standard:<br>";
        echo "- Sarapan: " . ($this->fasilitasSarapan ?? "Tidak Termasuk") . "<br>";
        echo "- Pemandangan: " . ($this->pemandanganKamar ?? "Tidak Ada") . "<br>";
    }
}
?>