<?php
require_once "app/Produk.php";

$id = $_GET['id'];
$pr = new app\Produk();

$row = $pr->edit_pr($id);
?>

<h2>Edit PRODUK</h2>

<form action="pr_proses.php" method="post">
    <input type="hidden" name="pr_id" value="<?php echo $row['pr_id']; ?>">
    <table>
        <tr>
            <td>NAMA PRODUK</td>
            <td><input type="text" name="pr_name" value="<?php echo $row['pr_name']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA KATEGORI</td>
            <td><select name="pr_id_categori">
                <option>---</option>
                <?php
                require_once "inc/Koneksi.php";
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_categori" ) or die (mysqli_eror());
                while($data = mysqli_fetch_array($sql)){
                    echo "<option value=$data[cat_id]> $data[cat_name]</option>";
                }
                ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="text" name="pr_jumlah" value="<?php echo $row['pr_jumlah']; ?>"></td>
        </tr>
        <tr>
            <td>SATUAN</td>
            <td><select name="pr_id_jenis">
                <option>---</option>
                <?php
                require_once "inc/Koneksi.php";
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_jenis" ) or die (mysqli_eror());
                while($data = mysqli_fetch_array($sql)){
                    echo "<option value=$data[jns_id]> $data[jns_satuan]</option>";
                }
                ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="pr_harga" value="<?php echo $row['pr_harga']; ?>"></td>
        </tr>
        <tr>
            <td>UKURAN</td>
            <td><input type="text" name="pr_ukuran" value="<?php echo $row['pr_ukuran']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>