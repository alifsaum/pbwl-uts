<?php

require_once "app/Produk.php";

$jns = new app\Produk();
$rows = $jns->tampil_pr();

?>
<marquee> DAFTAR NAMA PRODUK BESERTA KETERANGAN PRODUK  </marquee>
<h2>DAFTAR PRODUK</h2>
<a href="index.php?hal=pr_input" class="btn">TAMBAH PRODUK</a>
<table>
    <tr>
        <th>NO</th>
        <th>NAMA BARANG</th>
        <th>KATEGORI</th>
        <th>JUMLAH</th>
        <th>SATUAN</th>
        <th>HARGA</th>
        <th>UKURAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['pr_id']; ?></td>
        <td><?php echo $row['pr_name']; ?></td>
        <td><?php echo $row['cat_name']; ?></td>
        <td><?php echo $row['pr_jumlah']; ?></td>
        <td><?php echo $row['jns_satuan']; ?></td>
        <td><?php echo $row['pr_harga']; ?></td>
        <td><?php echo $row['pr_ukuran']; ?></td>
        <td><a href="index.php?hal=pr_edit&id=<?php echo $row['pr_id']; ?>" class="btn_edit"><img src="layout/assets/image/edit.png"></a></td>
        <td><a href="index.php?hal=pr_delete&id=<?php echo $row['pr_id']; ?>" class="btn_delete"><img src="layout/assets/image/hapus.png"></a></td>
    </tr>
    <?php } ?>
</table>
