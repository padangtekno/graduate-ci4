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
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo session()->getFlashdata('pesan');
                echo '</h5></div>';
            }
            ?>
            <?php echo form_open('BeritaAcara/updateBeritaAcara/' . $mhs['id_mahasiswa']) ?>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>NPM</label>
                        <input name="npm" value="<?= $mhs['npm'] ?>" class="form-control" placeholder="NPM" readonly>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input name="nama_mahasiswa" value="<?= $mhs['nama_mahasiswa'] ?>" class="form-control" placeholder="Nama Mahasiswa" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Program Studi</label>
                        <input name="nama_prodi" value="<?= $mhs['nama_prodi'] ?>" class="form-control" placeholder="Nama Mahasiswa" readonly>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pembimbing Ilmu</label>
                        <select name="pembimbing_ilmu" class="form-control">
                            <option value="">--Pilih Pembimbing--</option>
                            <?php foreach ($dosen as $key => $d) { ?>
                                <option value="<?= $d['nama_dosen'] ?>" <?= $d['nama_dosen'] == $mhs['pembimbing_ilmu'] ? 'selected' : '' ?>><?= $d['nama_dosen'] ?></option>
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
                                <option value="<?= $d['nama_dosen'] ?>" <?= $d['nama_dosen'] == $mhs['pembimbing_agama'] ? 'selected' : '' ?>><?= $d['nama_dosen'] ?></option>
                            <?php } ?>
                        </select>
                        <p class="text-danger"><?= isset($error['pembimbing_agama']) == isset($error['pembimbing_agama']) ? validation_show_error('pembimbing_agama') : '' ?></p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Penguji Murni</label>
                        <input name="penguji_murni" value="<?= $mhs['penguji_murni'] ?>" class="form-control" placeholder="Penguji Murni" required>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ketua Komisi Penguji</label>
                        <input name="ketua_komisi_penguji" value="<?= $mhs['ketua_komisi_penguji'] ?>" class="form-control" placeholder="Ketua Komisi Penguji" required>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tgl_ujian" value="<?= $mhs['tgl_ujian'] ?>" class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jam</label>
                        <input type="time" name="jam_ujian" value="<?= $mhs['jam_ujian'] ?>" class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Judul Skripsi</label>
                        <input name="judul_skripsi" value="<?= $mhs['judul_skripsi'] ?>" class="form-control" placeholder="Judul Skripsi" required>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Hasil Ujian Huruf</label>
                        <input name="hasil_ujian_huruf" value="<?= $mhs['hasil_ujian_huruf'] ?>" class="form-control" placeholder="Hasil Ujian" required>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Hsil Ujian Angka</label>
                        <input name="hasil_ujian_angka" value="<?= $mhs['hasil_ujian_angka'] ?>" class="form-control" placeholder="Hasil Ujian" required>
                    </div>
                </div>

            </div>
            <button class="btn btn-primary btn-flat btn-sm">Simpan</button>
            <a href="<?= base_url('BeritaAcara') ?>" class="btn btn-success btn-flat btn-sm">Kembali</a>
            <?php echo form_close() ?>

        </div>
    </div>
</div>