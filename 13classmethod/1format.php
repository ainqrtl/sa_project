<?php
//membuat class
class students{
   //property
   var $nama = "Rara";
   var $nilai1= 90;
   var $nilai2= 80;

   //method 
   function tampilhello(){
    return "hello ";

   }

 
}


//insntansiasi class student
//object saya
$saya = new students();


//memanggil method tampilkannama dari class students
echo $saya->tampilhello();

echo "<br />";
echo $saya->nama;
echo "<br />";
echo $saya->nilai1;
