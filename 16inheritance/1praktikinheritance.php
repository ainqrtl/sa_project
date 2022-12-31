<?php
//membuat class

use students as GlobalStudents;

class students{
   //property
   public $nama = "Rara";
   private $nilai1= 90;
   protected $nilai2= 80;

   //method 
  function berinama($namasiswa){
    $this->nama=$namasiswa;

   }

}

//membuat class turunan atau subclass dari students

class best extends students{
    //property class best
    public $nama_best;

    //method class best
    function berinamabest($namabest){
        $this->nama_best =$namabest;
    }


}

//insntansiasi class student
$students = new best();


//memanggil method  dari class manusia
$students->berinama("Andi");
$students->berinamabest("Rina");
 

//menampilkan isi property
echo "Nama Siswa :" .$students->nama."<br>";
echo "Nama Siswa Terbaik :" .$students->nama_best."<br>";




