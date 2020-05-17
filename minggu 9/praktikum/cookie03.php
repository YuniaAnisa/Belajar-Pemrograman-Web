<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // set the expiration date to one hour ago 
        setcookie ("username", "", time() - 3600); 
        setcookie ("namalengkap", "", time() - 3600); 
        echo "<h1>Cookie Berhasil dihapus.</h1>"; 
        echo "<h2>Klik <a href='cookie01.php'>di sini</a> untuk penciptaan cookies</h2>"; 
        echo "<h2>Klik <a href='cookie02.php'>di sini</a> untuk pemeriksaan cookies</h2>"; 
    ?>
</body>
</html>