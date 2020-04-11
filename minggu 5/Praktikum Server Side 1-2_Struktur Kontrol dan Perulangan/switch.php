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
        $day = date ("D");
        switch ($day) 
        {
            case 'Sun' : $hari = "Minggu"; break;
            case 'Mon' : $hari = "Senin"; break;
            case 'Tue' : $hari = "Selasa"; break;
            case 'Wed' : $hari = "Rabu"; break;
            case 'Thu' : $hari = "Kamis"; break;
            case 'Fri' : $hari = "Jum'at"; break;
            case 'Sat' : $hari = "Sabtu"; break;
            default : $hari = "Kiamat";
        }
        echo "Hari ini hari <b>$hari</b>";
    ?>    
</body>
</html>