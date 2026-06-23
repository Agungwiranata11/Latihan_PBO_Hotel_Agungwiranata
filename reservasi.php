<?php
// Reservasi.php

abstract class Reservasi {
    // 3. Properti/Atribut Terenkapsulasi (protected)
    protected $id_reservasi;
    protected $nomor_kamar;
    protected $nama_tamu;
    protected $durasi_menginap;
    protected $harga_per_malam;

    // Constructor untuk inisialisasi data data awal objek
    public function __construct($id_reservasi, $nomor_kamar, $nama_tamu, $durasi_menginap, $harga_per_malam) {
        $this->id_reservasi = $id_reservasi;
        $this->nomor_kamar = $nomor_kamar;
        $this->nama_tamu = $nama_tamu;
        $this->durasi_menginap = $durasi_menginap;
        $this->harga_per_malam = $harga_per_malam;
    }

    // 4. Metode Abstrak (Tanpa Isi/Body)
    // Wajib diimplementasikan ulang oleh class anak nanti (misal: KamarStandard, KamarDeluxe, dll)
    abstract public function hitungTotalBiaya();
    abstract public function tampilkanFasilitasLayanan();

    // Fungsi Getter untuk mengakses properti yang di-protected
    public function getIdReservasi() { return $this->id_reservasi; }
    public function getNomorKamar() { return $this->nomor_kamar; }
    public function getNamaTamu() { return $this->nama_tamu; }
    public function getDurasiMenginap() { return $this->durasi_menginap; }
    public function getHargaPerMalam() { return $this->harga_per_malam; }
}
?>