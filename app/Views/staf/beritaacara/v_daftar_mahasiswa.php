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
            <table id="example1" class="table table-sm table-bordered">
                <thead>
                    <tr class="text-center">
                        <th width="50px">NO</th>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Program Studi</th>
                        <th>Aksi</th>
                        <th>Print</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($mhs as $key => $value) {                     ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td class="text-center"><?= $value['npm'] ?></td>
                            <td><?= $value['nama_mahasiswa'] ?></td>
                            <td><?= $value['nama_prodi'] ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('BeritaAcara/editBeritaAcara/' . $value['id_mahasiswa']) ?>" class="btn btn-flat btn-xs btn-warning"><i class="fas fa-pencil-alt"></i></a>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('BeritaAcara/cetakBeritaAcara/' . $value['id_mahasiswa']) ?>" target="_blank" class="btn btn-flat btn-xs btn-success"><i class="fas fa-print"></i> Berita Acara</a>
                                <a href="<?= base_url('BeritaAcara/cetakUndangan/' . $value['id_mahasiswa']) ?>" target="_blank" class="btn btn-flat btn-xs btn-primary"><i class="fas fa-print"></i> Undangan</a>
                                <a href="<?= base_url('BeritaAcara/cetakSuratTugas/' . $value['id_mahasiswa']) ?>" target="_blank" class="btn btn-flat btn-xs btn-info"><i class="fas fa-print"></i> Surat Tugas</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>


<script>
    $(function() {
        $("#example1").DataTable({
            "paging": true,
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>