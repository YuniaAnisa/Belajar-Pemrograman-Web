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
        /* contoh 1 */
            for ($i = 1; $i <= 10; $i++) 
            {
                echo "$i ";
            }
                echo "<br><br>";
        /* contoh 2 */
            for ($i = 1; ; $i++) 
            {
                if ($i > 10) 
                {
                break;
                }
                echo "$i ";
            }
            echo "<br><br>";
        /* contoh 3 */
            $i = 1;
            for (; ; ) 
            {
                if ($i > 10)
                {
                    break;
                }
                echo "$i ";
                $i++;
            } 
            echo "<br><br>";
        /* contoh 4 */
            for ($i = 1; $i <= 10; print "$i ", $i++);
    ?>    
</body>
</html>