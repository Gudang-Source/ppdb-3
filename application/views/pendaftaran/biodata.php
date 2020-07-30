<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- FLASH DATA DATA BERHASIL -->

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <!-- FORM BIODATA -->
    <form for="pendaftaran" method="post" action="<?= base_url('pendaftaran/biodata'); ?>">
    <div class="row">
        <div class="col-lg-8 my-3">
            <h4>Identitas Siswa</h4>
        </div>
    </div>
        <div class="form-group row">
            <label for="nopen" class="col-sm-2 col-form-label">No Pendaftaran</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="nopen" name="nopen" value="<?= $nopen ?>" readonly>
                <?= form_error('nopen', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nik" name="nik" value="<?= $biodata['nik']; ?>" required>
                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $biodata['nisn']; ?>" required>
                <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="fullname" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $biodata['fullname']; ?>" required>
                <?= form_error('fullname', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="year_graduated" class="col-sm-2 col-form-label">Tahun Lulus</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="graduation_year" name="year_graduated" value="<?= $biodata['year_graduated']; ?>" required>
                <?= form_error('year_graduated', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="school" class="col-sm-2 col-form-label">Nama Sekolah Asal</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="school" name="school" value="<?= $biodata['school']; ?>" required>
                <?= form_error('school', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="noun" class="col-sm-2 col-form-label">No Ujian Nasional</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="noun" name="noun" value="<?= $biodata['noun']; ?>" required>
                <?= form_error('noun', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="Male" value="Male" <?= $biodata['gender'] == 'Male' ? 'checked' : ''; ?> required>
                        <label class="form-check-label" for="Laki-Laki">
                            Laki - Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="Female" value="Female" <?= $biodata['gender'] == 'Female' ? 'checked' : ''; ?> required>
                        <label class="form-check-label" for="Perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <label for="born_place" class="col-sm-2 col-form-label">Tempat Lahir</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="born_place" name="born_place" value="<?= $biodata['born_place'] ?>" required>
                <?= form_error('born_place', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-2 col-form-label">Tanggal Lahir</label>
            <div class="col-10">
                <input class="form-control" type="date" value="<?= $biodata['date'] ?>" id="date" name="date" required>
                <?= form_error('date', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="born_place" name="alamat" value="<?= $biodata['alamat'] ?>" required>
                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-8 my-3">
                <h4>Identitas Orang Tua</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 my-3">
                <h5>AYAH</h5>
            </div>
        </div>

        <div class="form-group row">
            <label for="father_name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="father_name" value="<?= $biodata['father_name'] ?? '' ?>" required>
                <?= form_error('father_name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="father_job" class="col-sm-2 col-form-label">Pekerjaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="father_job" value="<?= $biodata['father_job'] ?? '' ?>" required>
                <?= form_error('father_job', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="father_address" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="father_address" value="<?= $biodata['father_address'] ?? '' ?>" required>
                <?= form_error('father_address', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="father_handphone" class="col-sm-2 col-form-label">No Hp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="father_phone" value="<?= $biodata['father_phone'] ?? '' ?>" required>
                <?= form_error('father_phone', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-8 my-3">
                <h5>IBU</h5>
            </div>
        </div>

        <div class="form-group row">
            <label for="mother_name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="mother_name" value="<?= $biodata['mother_name'] ?? '' ?>" required>
                <?= form_error('mother_name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="mother_job" class="col-sm-2 col-form-label">Pekerjaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="mother_job" value="<?= $biodata['mother_job'] ?? '' ?>" required>
                <?= form_error('mother_job', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="mother_address" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="mother_address" value="<?= $biodata['mother_address'] ?? '' ?>" required>
                <?= form_error('mother_address', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="mother_phone" class="col-sm-2 col-form-label">No Hp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="mother_phone" value="<?= $biodata['mother_phone'] ?? '' ?>" required>
                <?= form_error('mother_phone', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary float-right">Simpan Data</button>
    </form>
    <!-- END FORM BIODATA -->

</div>
<!-- /.container-fluid -->


