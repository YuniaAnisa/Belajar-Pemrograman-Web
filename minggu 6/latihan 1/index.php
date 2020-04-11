<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1 </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <form action="proses.php" method="post">
  	    <div class="row">
            <h1>Data Mahasiswa</h1>
            <hr>
    	    <div class="col-25">
                <label>NIM:</label>
   		    </div>
    	    <div class="col-75">
      		    <input type="text" name="nim" placeholder="Masukkan NIM">
   		    </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Program Studi</label>
            </div>
            <div class="col-75">
                <select name="prodi">
                    <option value="">-Pilih Program Studi-</option>
                    <option value="Teknik Informatika S1">Teknik Informatika S1</option>
                    <option value="Sistem Informasi S1">Sistem Informasi S1</option>
                    <option value="Teknik Informatika D3">Teknik Informatika D3</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Nilai Tugas</label>
        </div>
            <div class="col-75">
                <input type="text" name="nilai_tugas" placeholder="Masukkan Nilai">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Nilai UTS</label>
        </div>
            <div class="col-75">
                <input type="text" name="nilai_uts" placeholder="Masukkan Nilai">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Nilai UAS</label>
        </div>
            <div class="col-75">
                <input type="text" name="nilai_uas" placeholder="Masukkan Nilai">
            </div>
        </div>
        
        <div class="row">
            <div class="col-25">
                <label>Catatan Khusus</label>
            </div>
            <div class="col-75">
            <p><input type="checkbox" name="catatan[]" value="Kehadiran >= 70%" />Kehadiran >= 70%</p>
            <p><input type="checkbox" name="catatan[]" value="Interaktif di kelas" />Interaktif Di Kelas</p>
            <p><input type="checkbox" name="catatan[]" value="Tidak Terlambat Mengumpulkan Tugas" />Tidak Terlambat Mengumpulkan Tugas</p>
            </div>
        </div>
        <div class="row">
            <input type="submit" name="kirim" value="Submit">
        </div>
    </form>
</div>
    

</body>
</html>