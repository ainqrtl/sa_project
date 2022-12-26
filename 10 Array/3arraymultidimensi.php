<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Belajar PHP untuk Pemula",
        "penulis" => "Quratul Ain"
        
    ],
    [
        "judul" => "Belajar MySQL untuk Pemula",
        "penulis" => "Quratul Ain"
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        "penulis" => "Quratul Ain"
    ]
];

// menampilkan array
foreach($artikel as $post){
    echo "<h2>".$post["judul"]."</h2>";
    echo "<p>".$post["penulis"]."<p>";
    echo "<hr>";
}