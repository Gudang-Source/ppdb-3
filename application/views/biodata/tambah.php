<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <?php echo "<font face=''>" ?>
            <div class="card">
                <div class="card-header">
                    <h4>Biodata Pendaftar</h4>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('biodata/tambah'); ?>
                    <!-- untuk file upload -->
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" name="nik" class="form-control" id="nik">
                        <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="asal">Asal Sekolah</label>
                        <select name="asal" class="form-control" id="asal">
                            <option>SMP</option>
                            <option>MTs</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="noun">No UN</label>
                        <input type="number" name="noun" class="form-control" id="noun">
                        <small class="form-text text-danger"><?= form_error('noun'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small> <!-- menampilkan teks field jika belum input nama saat tambah data -->
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" name="nim" class="form-control" id="nim">
                        <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <p><input type='radio' name='jk' value='pria' /> Pria</p>
                        <p><input type='radio' name='jk' value='perempuan' /> Perempuan</p>
                    </div>
                    <div class="form-group">
                        <label for="ttl">TTL</label>
                        <input type="text" name="ttl" class="form-control" id="ttl">
                        <small class="form-text text-danger"><?= form_error('ttl'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat">
                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-primary float-right" style="margin-left: 10px">Simpan</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

</div>