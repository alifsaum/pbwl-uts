<?php
require_once "app/Produk.php";
$id = $_GET['id'];

$pr = new app\Produk();
$rows = $pr->delete_pr($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?hal=pr_tampil">Kembali</a>
</div>