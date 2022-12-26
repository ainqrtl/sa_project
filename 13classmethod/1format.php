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
$students = new students();


//memanggil method tampilkannama dari class manusia
echo $students->tampilhello();

echo "<br />";
echo $students->nama;
echo "<br />";
echo $students->nilai1;
