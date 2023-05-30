<?php

require_once "inc/Koneksi.php";
require_once "app/Produk.php";

$pr = new App\Produk();

if (isset($_POST['btn_simpan'])) {
    $pr->simpan_pr();
    header("location:index.php?hal=pr_tampil");
}

if (isset($_POST['btn_update'])) {
    $pr->update_pr();
    header("location:index.php?hal=pr_tampil");
}