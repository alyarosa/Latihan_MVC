<?php
class BukuView {
    // Fungsi untuk menampilkan data buku ke browser
    public function tampilkan($dataBuku) {
        echo "<h2>Daftar Buku Perpustakaan</h2>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>Judul</th><th>Pengarang</th><th>Tahun Terbit</th></tr>";
        
        foreach ($dataBuku as $buku) {
            echo "<tr>";
            echo "<td>{$buku['judul']}</td>";
            echo "<td>{$buku['pengarang']}</td>";
            echo "<td>{$buku['tahun']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>
