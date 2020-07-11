<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg" style="margin-bottom:16px; padding: 16px; padding-left:0px;">

        </div>
    </div>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <form action="" method="post">
                <?= form_open_multipart('pendataan/ubah'); ?>
                <input type="hidden" name="id" value="<?= $pasien['id']; ?>">
                <div class="form-group row">
                    <label for="id_pasien" class="col-sm-2 col-form-label">Id Pasien</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_pasien" name="id_pasien" value="<?= $pasien['id_pasien']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $pasien['name']; ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" value="<?= $pasien['jeniskelamin']; ?>">
                        <?= form_error('jeniskelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tgl Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $pasien['tgl_lahir']; ?>">
                        <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $pasien['alamat']; ?>">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $pasien['pekerjaan']; ?>">
                        <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nohp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $pasien['nohp']; ?>">
                        <?= form_error('nohp', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="ubah" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->