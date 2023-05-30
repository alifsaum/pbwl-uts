<h2>SILAHKAN INPUT DATA JENIS</h2>
<form action="jns_proses.php" method="post">
    <table>
        <tr>
            <td>NAMA JENIS</td>
            <td><input type="text" name="jns_name"></td>
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
            <td><input type="text" name="jns_satuan"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>