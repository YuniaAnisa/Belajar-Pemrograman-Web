<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perulangan</title>
</head>
<body>
    <?php
        echo "Perulangan For";
        for ($i = 1; $i <= 5; $i++) {
            echo "<br>";
            for ($j = 1; $j <= $i; $j++) {
                echo "$i";
            }
        }

        echo "<br><br>";
        echo "Perulangan While";
        $a = 1;
        $b = 1;
        while ($a <= 5) {
            echo "<br>";
            while ($b <= $a) {
                echo "$a";
                $b++;
            }
            $a++;
            $b = 1;
        }
    ?>
</body>
</html>

