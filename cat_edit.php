<?php
require_once "app/Categori.php";

$id = $_GET['id'];
$cat = new app\Categori();

$row = $cat->edit($id);
?>

<h2>Edit Kategory</h2>

<form action="cat_proses.php" method="post">
    <input type="hidden" name="cat_id" value="<?php echo $row['cat_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="cat_name" value="<?php echo $row['cat_name']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>