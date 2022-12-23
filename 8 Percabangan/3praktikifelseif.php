<?Php
//contoh kasus pemberian gratis ongkir sesuai total belanja

//variabel total belanja
$total_belanja = 45000;

//kondisi 
if ($total_belanja > 50000 ){
    echo "Total belanja Anda : ". $total_belanja;
    echo "<br/>";
    echo "Anda Mendapat Voucher Gratis Ongkos Kirim Rp. 20.000";
}elseif ($total_belanja > 40000 ){
    echo "Total belanja Anda : ". $total_belanja;
    echo "<br/>";
    echo "Anda Mendapat Voucher Gratis Ongkos Kirim Rp. 10.000";

}else {
    echo "Total belanja Anda : ". $total_belanja;
    echo "<br/>";
    echo "Anda Tidak Mendapat Voucher Gratis Ongkos Kirim";
}


?>
