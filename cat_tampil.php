<?php

require_once "app/Categori.php";

$cat = new app\Categori();
$rows = $cat->tampil();

?>
<marquee> DAFTAR KATEGORI DARI PRODUK YANG TERSEDIA  </marquee>
<h2>KATEGORI MATERIAL</h2>
<a href="index.php?hal=cat_input" class="btn">TAMBAH KATEGORI</a>
<table>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['cat_id']; ?></td>
        <td><?php echo $row['cat_name']; ?></td>
        <td><a href="index.php?hal=cat_edit&id=<?php echo $row['cat_id']; ?>" class="btn_edit"><img src="layout/assets/image/edit.png"></a></td>
        <td><a href="index.php?hal=cat_delete&id=<?php echo $row['cat_id']; ?>" class="btn_delete"><img src="layout/assets/image/hapus.png"></a></td>
    </tr>
    <?php } ?>
</table>