<?php
class Buku {
    // Data buku disimpan di dalam array
    private $daftarBuku = [
        ["judul" => "laut bercerita", "pengarang" => "leila s. chudori", "tahun" => 2017],
        ["judul" => "pulang", "pengarang" => "leila s. chudori", "tahun" => 2012],
        ["judul" => "pulang", "pengarang" => "tere liye", "tahun" => 2015]
    ];

    // Fungsi untuk mengambil semua data buku
    public function getAllBuku() {
        return $this->daftarBuku;
    }
}
?>
