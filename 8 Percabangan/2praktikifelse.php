<?Php
//contoh kasus pemberian gratis ongkir sesuai total belanja

//variabel total belanja
$total_belanja = 40000;

//kondisi 
if ($total_belanja > 50000 ){
    echo "Total belanja Anda : ". $total_belanja;
    echo "<br/>";
    echo "Anda Mendapat Voucher Gratis Ongkos Kirim";
}else {
    echo "Total belanja Anda : ". $total_belanja;
    echo "<br/>";
    echo "Anda Tidak Mendapat Voucher Gratis Ongkos Kirim";
}


?>
