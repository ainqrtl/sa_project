<?php
//membuat class
class students{
   //property
   public $nama = "Rara";
   private $nilai1= 90;
   protected $nilai2= 80;

     //method 
  function berinama($namasiswa){
   $this->nama=$namasiswa;
   $this->nilai1=40;

  }
    
}


//insntansiasi class student
$saya = new students();


//memanggil method tampilkannama dari class manusia
$saya->berinama("Andi");

echo "<br />";
echo $saya->nama;
echo "<br />";
//error karena nilai1 bersifat private
echo $saya->nilai1;
