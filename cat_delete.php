<?php
require_once "app/Categori.php";
$id = $_GET['id'];

$cat = new app\Categori();
$rows = $cat->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?hal=cat_tampil">Kembali</a>
</div>