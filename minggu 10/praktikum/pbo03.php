<?php 
    //Program memanfaatkan pb02.php untuk membuat form inputan sederhana
    include "pbo02.inc.php"; 
    echo "<html><head><title>Mahasiswa</title></head><body>"; 
    $form = new Form ("","Input Form"); 
    $form->addField ("txtnim", "Nim"); 
    $form->addField ("txtnama", "Nama"); 
    $form->addField ("txtalamat", "Alamat"); 
    echo "<h3>Silahkan isi form berikut ini :</h3>"; 
    $form->displayForm(); 
    echo "</body></html>"; 
?>