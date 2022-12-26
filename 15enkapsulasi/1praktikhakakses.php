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
