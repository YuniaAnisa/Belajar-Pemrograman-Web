<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id Resep</th>
                <th scope="col">Id Rekam Medis</th>
                <th scope="col">Id Pasien</th>
                <th scope="col">Nama</th>
                <th scope="col">Id Dokter</th>
                <th scope="col">Obat</th>
                <th scope="col">Dosis</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($resep as $rp) : ?>
                <tr>
                    <?php /*  <th scope="row"><?= array_search($sm, $subMenu) + 1 ?></th>*/ ?>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $rp['id_resep']; ?></td>
                    <td><?= $rp['id_rekamedis']; ?></td>
                    <td><?= $rp['id_pasien']; ?></td>
                    <td><?= $rp['name']; ?></td>
                    <td><?= $rp['id_dokter']; ?></td>
                    <td><?= $rp['obat']; ?></td>
                    <td><?= $rp['dosis']; ?></td>
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