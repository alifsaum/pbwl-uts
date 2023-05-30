<?php
require_once "app/Jenis.php";
$id = $_GET['id'];

$jns = new app\Jenis();
$rows = $jns->delete_jns($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?hal=jns_tampil">Kembali</a>
</div>