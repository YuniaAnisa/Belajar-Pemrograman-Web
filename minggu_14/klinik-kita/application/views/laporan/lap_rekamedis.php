<div class="container-fluid">
    <div class="row">
        <div class="col-lg">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
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
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->