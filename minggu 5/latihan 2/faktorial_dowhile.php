<!DOCTYPE html>
<html>
<head>
	<title>Faktorial Do While</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
	<?php
		$n = isset($_POST['n']) ? $_POST['n'] : NULL;
		if(isset($_POST['submit']))
		 {
			if($n!=NULL)
			{
			 $bil = 1;
			 $i=1;
				do
				{
				 $bil= $bil*$i;
				 $i++;
				}
				while($i<=$n);
			}
		else
		 {
		  $bil = 'Bilangan tidak boleh kosong!';
		 }
		}

echo '<div class="panel">';
echo '<h2><center> Faktorial Do While</center></h2>';
echo '<hr>';
echo '<h4>Masukkan Bilangan :</h4>';
echo '<form action="" method="post">';
echo '<input class="field" type="text" name="n" value="'.$n.'" autocomplete="off" placeholder="Masukkan bilangan"/>';
echo '<input class="tombol" type="submit" name="submit" value="Hitung"/>';
echo '</form>';
if((isset($n))and($n!=NULL))
{
	echo '<h4>Hasil Faktorial :</h4>';
	echo '=> ';
	for($i=1;$i<$n;$i++)
	{echo $i.'x';}
	 echo $n;
     echo '<br>';
}
echo '<h4>Jumlah Faktorial :</h4>';
echo '<input class="field" type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';
echo '<br>';
echo '</div>';
?>
</body>
</html>