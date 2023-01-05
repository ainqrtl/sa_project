<!-- read -->
<?php
include('koneksi.php'); //menyisipkan sebuah file PHP 
$db = new database();
$data_barang = $db->tampil_data();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <!-- create -->
    <a href="add.php">Tambah Data</a>
    <!-- batas create -->
    <table border="1">
    <tr>
        <th>No</th>
        <th>Barang</th>
        <th>Stok</th>
        <th>Action</th>
    </tr>
    <?php
    $no = 1;
    foreach($data_barang as $row){
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo  $row['nama_barang'];?></td>
            <td><?php echo $row['stok'];?></td>
            <td>
                <!-- update -->
                <a href="edit.php?id=<?php echo $row['id_barang'];?>">Edit | </a>
                <!-- delete -->
                <a href="proses.php?action=delete&id=<?php echo $row['id_barang'];?> " onclick="return confirm('Are You Sure?')">Delete</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>