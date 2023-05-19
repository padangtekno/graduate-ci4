<div class="col-md-12">
    <div class="card card-primary card-outline shadow-lg">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?></h3>

            <!-- <div class="card-tools">
                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i> Tambah</button>
            </div> -->
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success" role="alert">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }

            if (session()->getFlashdata('delete')) {
                echo '<div class="alert alert-danger" role="alert">';
                echo session()->getFlashdata('delete');
                echo '</div>';
            }

            ?>
            <table class="table table-sm table-bordered">
                <tr class="text-center">
                    <th width="50px">NO</th>
                    <th>NPM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Program Studi</th>
                    <th>Pembimbing Ilmu</th>
                    <th>Pembimbing Agama</th>
                    <th>Aksi</th>
                </tr>
                <?php $no = 1;
                foreach ($mhs as $key => $value) {                     ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td class="text-center"><?= $value['npm'] ?></td>
                        <td><?= $value['nama_mahasiswa'] ?></td>
                        <td><?= $value['nama_prodi'] ?></td>
                        <td><?= $value['pembimbing_ilmu'] ?></td>
                        <td><?= $value['pembimbing_agama'] ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('BeritaAcara/editBeritaAcara/' . $value['id_mahasiswa']) ?>" class="btn btn-flat btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
                            <a href="<?= base_url('BeritaAcara/cetakBeritaAcara/' . $value['id_mahasiswa']) ?>" target="_blank" class="btn btn-flat btn-sm btn-success"><i class="fas fa-print"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>