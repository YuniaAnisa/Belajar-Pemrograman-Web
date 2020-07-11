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
                <?= form_open_multipart('pendataan/ubah_dokter'); ?>
                <input type="hidden" name="id" value="<?= $dokter['id']; ?>">
                <div class="form-group row">
                    <label for="id_dokter" class="col-sm-2 col-form-label">Id Dokter</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_dokter" name="id_dokter" value="<?= $dokter['id_dokter']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $dokter['name']; ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" value="<?= $dokter['jeniskelamin']; ?>">
                        <?= form_error('jeniskelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="spesialis" class="col-sm-2 col-form-label">Tgl Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="spesialis" name="spesialis" value="<?= $dokter['spesialis']; ?>">
                        <?= form_error('spesialis', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $dokter['alamat']; ?>">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nohp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $dokter['nohp']; ?>">
                        <?= form_error('nohp', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $dokter['email']; ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jadwal" class="col-sm-2 col-form-label">Jadwal</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jadwal" name="jadwal" value="<?= $dokter['jadwal']; ?>">
                        <?= form_error('jadwal', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <a class="btn btn-secondary" href="<?= base_url(); ?>pendataan/dokter">

                            <span>Cancel</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- /.container-fluid -->
<script src=" <?= base_url(); ?>assets/vendor/jquery/jquery.min.js"> </script>
<script>
    $('#sidebarToggle').click(function() {
        $('#accordionSidebar').toggleClass('toggled')
    })
</script>