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

//membuat class turunan atau subclass dari students

class friend extends students{
    //property class best
    public $nama_teman;
 

    //method class best
    function berinamateman($namateman){
        $this->nama_teman=$namateman;
    }

   
    


}

//insntansiasi class student
$saya = new friend();


//memanggil method  dari class manusia
$saya->berinama("Andi");
$saya->berinamateman("Rina");
 

//menampilkan isi property
echo "Nama Siswa :" .$saya->nama."<br>";
echo "Nama Teman :" .$saya->nama_teman."<br>";





