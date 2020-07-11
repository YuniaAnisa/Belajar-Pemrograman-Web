<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Rekam Medis<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>


            <?= $this->session->flashdata('message'); ?>

            <a href="<?= base_url(); ?>kelola_data/tambah" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newTambahModal">Tambah Data Rekam Medis</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id Rekam Medis</th>
                        <th scope="col">Id Dokter</th>
                        <th scope="col">Id Pasien</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Golongn Darah</th>
                        <th scope="col">Diagnosa</th>
                        <th scope="col">Obat</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($rekamedis as $rm) : ?>
                        <tr>
                            <?php /*  <th scope="row"><?= array_search($sm, $subMenu) + 1 ?></th>*/ ?>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $rm['id_rekamedis']; ?></td>
                            <td><?= $rm['id_dokter']; ?></td>
                            <td><?= $rm['id_pasien']; ?></td>
                            <td><?= $rm['name']; ?></td>
                            <td><?= $rm['gol_darah']; ?></td>
                            <td><?= $rm['diagnosa']; ?></td>
                            <td><?= $rm['obat']; ?></td>
                            <td>

                                <a href="<?= base_url(); ?>kelola_data/ubah_rekamedis/<?= $rm['id']; ?>" class="badge badge-primary">edit</a>
                                <a href="<?= base_url(); ?>kelola_data/hapus/<?= $rm['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newTambahModal" tabindex="-1" role="dialog" aria-labelledby="newTambahModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newTambahModal">Detail Data Rekam Medis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('kelola_data/tambah') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="id_rekamedis" name="id_rekamedis" placeholder="Id Rekam Medis">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="id_dokter" name="id_dokter" placeholder="Id Dokter">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="id_pasien" name="id_pasien" placeholder="Id Pasien">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Golongan Darah">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="diagnosa" name="diagnosa" placeholder="Diagnosa">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="obat" name="obat" placeholder="Obat">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>