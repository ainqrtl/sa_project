<?php

$things = ["baju","sepatu","celana","kaos"];

echo "<h5>Daftar Barang</h5>";
echo "<ul>";

foreach ($things as $thing){
    echo"<li>$thing</li>";

}

echo "</ul>";