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
                            <button class="btn btn-flat btn-sm btn-danger" data-toggle="modal" data-target="#edit<?= $value['id_mahasiswa'] ?>"><i class="fas fa-pencil-alt"></i></button>
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


<!-- Modal Tambah -->
<?php foreach ($mhs as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_mahasiswa'] ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Data <?= $judul ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open('BeritaAcara/updateDataMahasiswa/' . $value['id_mahasiswa']) ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>NPM</label>
                                <input name="npm" value="<?= $value['npm'] ?>" class="form-control" placeholder="NPM" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Nama Mahasiswa</label>
                                <input name="nama_mahasiswa" value="<?= $value['nama_mahasiswa'] ?>" class="form-control" placeholder="Nama Mahasiswa" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Program Studi</label>
                                <input name="nama_prodi" value="<?= $value['nama_prodi'] ?>" class="form-control" placeholder="Nama Mahasiswa" readonly>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Pembimbing Ilmu</label>
                                <select name="pembimbing_ilmu" class="form-control">
                                    <option value="">--Pilih Pembimbing--</option>
                                    <?php foreach ($dosen as $key => $d) { ?>
                                        <option value="<?= $d['nama_dosen'] ?>" <?= $d['nama_dosen'] == $value['pembimbing_ilmu'] ? 'selected' : '' ?>><?= $d['nama_dosen'] ?></option>
                                    <?php } ?>
                                </select>
                                <p class="text-danger"><?= isset($error['pembimbing_ilmu']) == isset($error['pembimbing_ilmu']) ? validation_show_error('pembimbing_ilmu') : '' ?></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Pembimbing Agama</label>
                                <select name="pembimbing_agama" class="form-control">
                                    <option value="">--Pilih Pembimbing--</option>
                                    <?php foreach ($dosen as $key => $d) { ?>
                                        <option value="<?= $d['nama_dosen'] ?>" <?= $d['nama_dosen'] == $value['pembimbing_agama'] ? 'selected' : '' ?>><?= $d['nama_dosen'] ?></option>
                                    <?php } ?>
                                </select>
                                <p class="text-danger"><?= isset($error['pembimbing_agama']) == isset($error['pembimbing_agama']) ? validation_show_error('pembimbing_agama') : '' ?></p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Penguji Murni</label>
                                <input name="penguji_murni" value="<?= $value['penguji_murni'] ?>" class="form-control" placeholder="Penguji Murni" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Ketua Komisi Penguji</label>
                                <input name="ketua_komisi_penguji" value="<?= $value['ketua_komisi_penguji'] ?>" class="form-control" placeholder="Ketua Komisi Penguji" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Ketua Komisi Penguji</label>
                                <input type="date" name="tgl_ujian" value="" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Ketua Komisi Penguji</label>
                                <input type="time" name="jam_ujian" value="" class="form-control" required>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
                <?= form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

<?php } ?>