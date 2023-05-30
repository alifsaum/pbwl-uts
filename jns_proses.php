<?php

require_once "inc/Koneksi.php";
require_once "app/Jenis.php";

$jns = new App\Jenis();

if (isset($_POST['btn_simpan'])) {
    $jns->simpan_jns();
    header("location:index.php?hal=jns_tampil");
}

if (isset($_POST['btn_update'])) {
    $jns->update_jns();
    header("location:index.php?hal=jns_tampil");
}