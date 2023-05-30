<?php

require_once "inc/Koneksi.php";
require_once "app/Categori.php";

$cat = new app\Categori();

if (isset($_POST['btn_simpan'])) {
    $cat->simpan();
    header("location:index.php?hal=cat_tampil");
}

if (isset($_POST['btn_update'])) {
    $cat->update();
    header("location:index.php?hal=cat_tampil");
}