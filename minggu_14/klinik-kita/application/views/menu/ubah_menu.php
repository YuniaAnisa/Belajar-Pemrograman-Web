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
                <?= form_open_multipart('menu/ubah_menu'); ?>
                <input type="hidden" name="id" value="<?= $menu['id']; ?>">
                <div class="form-group row">
                    <label for="menu" class="col-sm-2 col-form-label">Menu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu']; ?>">
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