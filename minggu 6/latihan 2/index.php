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
    <form action="" method="post">
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

<?php
    if (isset($_POST['kirim'])) {
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];

        $nilai_akhir = (0.4 * $nilai_tugas) + (0.3 * $nilai_uts) + (0.3 * $nilai_uas);
        if ($nilai_akhir > 84) {
            $status = 'Lulus';
        } elseif ($nilai_akhir > 70) {
            $status = 'Lulus';
        } elseif ($nilai_akhir > 60) {
            $status = 'lulus';
        } elseif ($nilai_akhir > 50) {
            $status = 'Tidak Lulus';
        } else {
            $status = "Tidak Lulus";
        }

        $selected_catatan = array();
        if (!empty($_POST['catatan'])) {
            foreach ($_POST['catatan'] as $catatan) {
                array_push($selected_catatan, $catatan);
            }
        }
    ?>
        <table border=3>
            <thead>
                <tr>
                    <th>Program Studi</th>
                    <th>NIM</th>
                    <th>Nilai AKhir</th>
                    <th>Status</th>
                    <th>Catatan Khusus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $prodi ?></td>
                    <td><?= $nim ?></td>
                    <td><?= $nilai_akhir ?></td>
                    <td><?= $status ?></td>
                    <td>
                        <?php
                        foreach ($selected_catatan as $catatan_data) {
                            echo $catatan_data . "<br>";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>

    <?php
    }
    ?>
    

</body>
</html>