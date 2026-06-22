<?php
// KamarSuite.php
require_once 'Reservasi.php';

class KamarSuite extends Reservasi {
    // Properti tambahan spesifik
    private $layananJacuzzi;
    private $layananJemputBandara;

    public function __construct($id_reservasi, $nomor_kamar, $nama_tamu, $durasi_menginap, $harga_per_malam, $layananJacuzzi, $layananJemputBandara) {
        parent::__construct($id_reservasi, $nomor_kamar, $nama_tamu, $durasi_menginap, $harga_per_malam);
        $this->layananJacuzzi = $layananJacuzzi;
        $this->layananJemputBandara = $layananJemputBandara;
    }

    public function hitungTotalBiaya() {
        // Contoh penyesuaian kelas Suite jika ada biaya tambahan atau skema khusus
        return $this->durasi_menginap * $this->harga_per_malam;
    }

    public function tampilkanFasilitasLayanan() {
        echo "Fasilitas Kamar Suite:<br>";
        echo "- Layanan Jacuzzi: " . ($this->layananJacuzzi ?? "Tidak Ada") . "<br>";
        echo "- Penjemputan Bandara: " . ($this->layananJemputBandara ?? "Tidak Ada") . "<br>";
    }
}
?>