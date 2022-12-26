<?php

// membuat array
$items= ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array
echo $items[0]."<br>";
echo $items[1]."<br>";
echo $items[2]."<br>";

echo "<hr>";

//menghapus isi array item
unset($items[1]);

//menambah item array pada indeks terakhir
$items[] ="Pensil";
$items[] ="Kertas";

// menampilkan isi array dengan perulangan foreach
foreach($items as $item){
    echo $item."<br>";
}

echo "<hr>";

