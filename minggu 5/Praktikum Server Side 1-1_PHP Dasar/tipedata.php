<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktikum</title>
</head>
<body>
    <?php
        $nim = "A11.2018.06096";
        $nama = 'Yunia Nur Anisa';
        $umur = 23;
        $nilai = 82.25;
        $status = TRUE;
            echo "NIM : " . $nim . "<br>";
            echo "Nama : $nama<br>";
            print "Umur : " . $umur; print "<br>";
            printf ("Nilai : %.3f<br>", $nilai);
        if ($status)
            echo "Status : Aktif";
        else
            echo "Status : Tidak Aktif";
    ?>
</body>
</html>