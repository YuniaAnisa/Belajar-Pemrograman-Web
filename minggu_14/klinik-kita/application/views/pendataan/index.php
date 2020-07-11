<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Pasien<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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

            <a href="<?= base_url(); ?>pendataan/tambah" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newTambahModal">Tambah Data Pasien</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id Pasien</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tgl Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">No HP</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pasien as $p) : ?>
                        <tr>
                            <?php /*  <th scope="row"><?= array_search($sm, $subMenu) + 1 ?></th>*/ ?>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $p['id_pasien']; ?></td>
                            <td><?= $p['name']; ?></td>
                            <td><?= $p['jeniskelamin']; ?></td>
                            <td><?= $p['tgl_lahir']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td><?= $p['pekerjaan']; ?></td>
                            <td><?= $p['nohp']; ?></td>
                            <td>

                                <a href="<?= base_url(); ?>pendataan/ubah/<?= $p['id']; ?>" data-id="<?= $p['id']; ?>" class="badge badge-primary">edit</a>
                                <a href="<?= base_url(); ?>pendataan/hapus/<?= $p['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
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
                <h5 class="modal-title" id="newTambahModal">Detail Data Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pendataan/tambah') ?>" method="post">
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
                        <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" placeholder="Jenis Kelamin">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tgl Lahir">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No HP">
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