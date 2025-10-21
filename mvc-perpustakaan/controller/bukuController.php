<?php
require_once "model/buku.php";
require_once "view/bukuView.php";

class BukuController {
    public function index() {
        // Membuat objek model dan view
        $model = new Buku();
        $view = new BukuView();

        // Ambil data dari model
        $dataBuku = $model->getAllBuku();

        // Kirim data ke view
        $view->tampilkan($dataBuku);
    }
}
?>
