<div class="col-sm-12">
    <div class="callout callout-info">
        <h5>Selamat Datang <b class="text-primary"><?= $mhs['nama_mahasiswa'] ?></b></h5>
    </div>
</div>

<div class="col-sm-12">
    <h3><b>Persyaratan Wisuda</b></h3>
    <div class="row">
        <?php foreach ($persyaratan as $key => $value) { ?>
            <div class="col-sm-6">

                <div class="callout callout-success">
                    <h5><i class="icon fas fa-check"></i> <?= $value['nama_persyaratan'] ?></h5>
                </div>

            </div>
        <?php } ?>
    </div>
</div>