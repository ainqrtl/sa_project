<?php
//membuat class
class students{
   //property
   var $nama = "Rara";
   var $nilai1= 90;
   var $nilai2= 80;

   

   //method 

   function __construct(){
    echo "ini adalah isi method construct <br/>";
}  
 //method destruct di jalankan terakhir
 function __destruct(){
    echo "ini adalah isi method destruct <br/>";
}

  //method 
  function berinama($namasiswa){
    $this->nama=$namasiswa;
 
 /*
 Variabel $this merupakan variabel khusus PHP dalam OOP 
 yang digunakan untuk menunjuk sebuah objek, ketika kita mau mengaksesnya dalam sebuah class. 
 */
   }

 
}


//insntansiasi class student
$students = new students();


//memanggil method tampilkannama dari class manusia
 $students->berinama("Andi");

echo "<br />";
echo $students->nama;
echo "<br />";
echo $students->nilai1;
echo "<br />";
