<h2>SILAHKAN INPUT DATA PRODUK</h2>
<form action="pr_proses.php" method="post">
    <table>
        <tr>
            <td>NAMA PRODUK</td>
            <td><input type="text" name="pr_name"></td>
        </tr>
        <tr>
            <td>KATEGORI</td>
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
            <td><input type="text" name="pr_jumlah"></td>
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
            <td><input type="text" name="pr_harga"></td>
        </tr>
        <tr>
            <td>UKURAN</td>
            <td><input type="text" name="pr_ukuran"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>