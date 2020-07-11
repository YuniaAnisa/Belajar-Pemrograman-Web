<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Dokter<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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

            <a href="<?= base_url(); ?>pendataan/tambah_dokter" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newTambahModal">Tambah Data Dokter</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id Dokter</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Spesialis</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jadwal</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dokter as $d) : ?>
                        <tr>
                            <?php /*  <th scope="row"><?= array_search($sm, $subMenu) + 1 ?></th>*/ ?>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $d['id_dokter']; ?></td>
                            <td><?= $d['name']; ?></td>
                            <td><?= $d['jeniskelamin']; ?></td>
                            <td><?= $d['spesialis']; ?></td>
                            <td><?= $d['alamat']; ?></td>
                            <td><?= $d['nohp']; ?></td>
                            <td><?= $d['email']; ?></td>
                            <td><?= $d['jadwal']; ?></td>
                            <td>

                                <a href="<?= base_url(); ?>pendataan/ubah_dokter/<?= $d['id']; ?>" class="badge badge-primary">edit</a>
                                <a href="<?= base_url(); ?>pendataan/hapus_dokter/<?= $d['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
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
            <form action="<?= base_url('pendataan/tambah_dokter') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="id_dokter" name="id_dokter" placeholder="Id Dokter">
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
                        <input type="text" class="form-control" id="spesialis" name="spesialis" placeholder="Spesialis">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No HP">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="jadwal" name="jadwal" placeholder="Jadwal">
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