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
                <?= form_open_multipart('kelola_data/ubah_rekamedis'); ?>
                <input type="hidden" name="id" value="<?= $rekamedis['id']; ?>">
                <div class="form-group row">
                    <label for="id_rekamedis" class="col-sm-2 col-form-label">Id Rekam Medis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_rekamedis" name="id_rekamedis" value="<?= $rekamedis['id_rekamedis']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_dokter" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_dokter" name="id_dokter" value="<?= $rekamedis['id_dokter']; ?>">
                        <?= form_error('id_dokter', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_pasien" class="col-sm-2 col-form-label">Id Pasien</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_pasien" name="id_pasien" value="<?= $rekamedis['id_pasien']; ?>">
                        <?= form_error('id_pasien', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $rekamedis['name']; ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gol_darah" class="col-sm-2 col-form-label">Golongan Darah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="gol_darah" name="gol_darah" value="<?= $rekamedis['gol_darah']; ?>">
                        <?= form_error('gol_darah', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="diagnosa" class="col-sm-2 col-form-label">Diagnosa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="diagnosa" name="diagnosa" value="<?= $rekamedis['diagnosa']; ?>">
                        <?= form_error('diagnosa', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="obat" class="col-sm-2 col-form-label">Obat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="obat" name="obat" value="<?= $rekamedis['obat']; ?>">
                        <?= form_error('obat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="ubah" class="btn btn-primary">Edit</button>
                        <a class="btn btn-secondary" href="<?= base_url(); ?>kelola_data">

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