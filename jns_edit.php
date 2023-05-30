<?php
require_once "app/Jenis.php";

$id = $_GET['id'];
$jns = new app\Jenis();

$row = $jns->edit_jns($id);
?>

<h2>Edit Kategory</h2>

<form action="jns_proses.php" method="post">
    <input type="hidden" name="jns_id" value="<?php echo $row['jns_id']; ?>">
    <table>
        <tr>
            <td>NAMA JENIS</td>
            <td><input type="text" name="jns_name" value="<?php echo $row['jns_name']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA KATEGORI</td>
            <td><select name="jns_id_categori">
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
            <td>SATUAN</td>
            <td><input type="text" name="jns_satuan" value="<?php echo $row['jns_satuan']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>