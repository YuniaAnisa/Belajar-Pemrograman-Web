<?php 
        include '../../conf.php'; 
        include '../../library.php'; 
        $lib = new Library();
        $id = get('id'); 
        $hapus = $lib->delete($id);
        if($hapus) 
        {
            header("location:../../index.php?p=sekolah"); 
        }
?>
