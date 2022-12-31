<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h3>Tambah Data Barang</h3>
    <hr/>

    <form action="proses.php?action=add" method="post">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>: </td>
                <td><input type="text" name="nama_barang" id=""></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>: </td>
                <td><input type="number" name="stok" id=""></td>
            </tr>
            <tr>
                <td> <input type="submit" value="Save" name="submit"></td>
            </tr>
           
        </table>
    </form>
</body>
</html>