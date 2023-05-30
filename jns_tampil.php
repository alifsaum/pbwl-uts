<?php

require_once "app/Jenis.php";

$jns = new app\Jenis();
$rows = $jns->tampil_jns();

?>
<marquee> DAFTAR JENIS JENIS DARI PRODUK BERSERTA SATUAN YANG TERSEDIA  </marquee>
<h2>JENIS PRODUK</h2>
<a href="index.php?hal=jns_input" class="btn">TAMBAH JENIS</a>
<table>
    <tr>
        <th>NO</th>
        <th>NAMA JENIS</th>
        <th>NAMA KATEGORI</th>
        <th>SATUAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['jns_id']; ?></td>
        <td><?php echo $row['jns_name']; ?></td>
        <td><?php echo $row['cat_name']; ?></td>
        <td><?php echo $row['jns_satuan']; ?></td>
        <td><a href="index.php?hal=jns_edit&id=<?php echo $row['jns_id']; ?>" class="btn_edit"><img src="layout/assets/image/edit.png"></a></td>
        <td><a href="index.php?hal=jns_delete&id=<?php echo $row['jns_id']; ?>" class="btn_delete"><img src="layout/assets/image/hapus.png"></a></td>
    </tr>
    <?php } ?>
</table>
