<?php
//contoh kasus usia yang diperbolehkan menjadi member

$usia = 16;
$punyaktp = false;

if ($usia >= 17){
    if($punyaktp){
        echo "Anda Boleh menjadi member";
    } else {
       echo  "Silahkan Upload KTP Anda";
    }
}else{
    echo ("Maaf Member untuk di atas 17 tahun");


}

?>
