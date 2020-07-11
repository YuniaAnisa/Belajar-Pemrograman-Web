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
                <?= form_open_multipart('kelola_data/ubah_resep'); ?>
                <input type="hidden" name="id" value="<?= $resep['id']; ?>">
                <div class="form-group row">
                    <label for="id_resep" class="col-sm-2 col-form-label">Id Resep</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_resep" name="id_resep" value="<?= $resep['id_resep']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_rekamedis" class="col-sm-2 col-form-label">Id Rekam Medis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_rekamedis" name="id_rekamedis" value="<?= $resep['id_rekamedis']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_pasien" class="col-sm-2 col-form-label">Id Pasien</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_pasien" name="id_pasien" value="<?= $resep['id_pasien']; ?>">
                        <?= form_error('id_pasien', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $resep['name']; ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_dokter" class="col-sm-2 col-form-label">Id Dokter</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_dokter" name="id_dokter" value="<?= $resep['id_dokter']; ?>">
                        <?= form_error('id_dokter', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="obat" class="col-sm-2 col-form-label">Obat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="obat" name="obat" value="<?= $resep['obat']; ?>">
                        <?= form_error('obat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dosis" class="col-sm-2 col-form-label">Dosis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="dosis" name="dosis" value="<?= $resep['dosis']; ?>">
                        <?= form_error('dosis', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="ubah" class="btn btn-primary">Edit</button>
                        <a class="btn btn-secondary" href="<?= base_url(); ?>kelola_data/resep">

                            <span>Cancel</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->