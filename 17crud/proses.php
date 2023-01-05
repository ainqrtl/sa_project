<!-- create-->
<!-- untuk menyimpan proses aksi yang akan dilakukan -->
<?php
include('koneksi.php');
$koneksi = new database();

//create
$action = $_GET['action'];
if($action== "add")
{
    $koneksi->add($_POST['nama_barang'], $_POST['stok']);
    header('location:index.php');
}
//update
elseif($action=="update"){
    $koneksi->update_data($_POST['nama_barang'],$_POST['stok'], $_POST['id_barang']);
    header('location:index.php');

}
//delete
elseif($action =="delete")
{
   $id_barang = $_GET['id'];
   $koneksi->delete_data($id_barang);
   header('location:index.php');
}


?>