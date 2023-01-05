<?php
include('koneksi.php');
$db = new database();
$id_barang = $_GET['id'];
if(! is_null($id_barang))
{
    $data_barang = $db->get_by_id($id_barang);
}
else{
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Barang</title>
</head>
<body>
    <h3>Edit Data Barang</h3>

    <form method="post" action="proses.php?action=update">
        <input type="hidden" name="id_barang" value="<?php echo $data_barang['id_barang'];?>"/>

        <table>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama_barang" id="" value="<?php echo $data_barang['nama_barang'];?>"></td>
            </tr>
            <tr>
            <td>Stok</td>
            <td>:</td>
            <td><input type="text" name="stok" id="" value="<?php echo $data_barang['stok'];?>"></td>
            </tr>

            <td><input type="submit" name="submit" value="Update"></td>
        </table>
    </form>
</body>
</html>