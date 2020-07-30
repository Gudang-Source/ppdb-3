<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg-8">
      <?= $this->session->flashdata('message'); ?>
      <?= $this->session->flashdata('upload_status'); ?>
    </div>
  </div>

  <!-- Carousel-->

  <!-- BANNER -->
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Nilai Raport</h5>
    </div>
  </div>
  <!-- END BANNER -->

  <br>
  <hr>

  <!-- NILAI -->
  <form for="raport" method="post" enctype="multipart/form-data" action="<?= base_url('pendaftaran/raport'); ?>">
  
  <input type="hidden" name="mode" value="<?= $nilai == null ? 'create' : 'update' ?>">
  
  <div class="row">
      <div class="col-md-2">
        <p><b>Mata Pelajaran</b></p>
      </div>
      <div class="col-md-2">
        <label for="sem1"><b>Semester 1</b></label>
      </div>
      <div class="col-md-2">
        <label for="sem2"><b>Semester 2</b></label>
      </div>
      <div class="col-md-2">
        <label for="sem3"><b>Semester 3</b></label>
      </div>
      <div class="col-md-2">
        <label for="sem4"><b>Semester 4</b></label>
      </div>
      <div class="col-md-2">
        <label for="sem5"><b>Semester 5</b></label>
      </div>
    </div>
    <!-- AGAMA -->
    <div class="row mt-3">
      <div class="col-md-2">
        <p>Pend Agama</p>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="agama1" id="agama1" value="<?= $nilai['agama1']  ?? '' ?>" required>
        <?= form_error('agama1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="agama2" id="agama2" value="<?= $nilai['agama2']  ?? '' ?>" required>
        <?= form_error('agama2', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="agama3" id="agama3" value="<?= $nilai['agama3']  ?? '' ?>" required>
        <?= form_error('agama3', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="agama4" id="agama4" value="<?= $nilai['agama4']  ?? '' ?>" required>
        <?= form_error('agama4', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="agama5" id="agama5" value="<?= $nilai['agama5']  ?? '' ?>" required>
        <?= form_error('agama5', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>

    <!-- PPKN -->
    <div class="row mt-3">
      <div class="col-md-2">
        <p>PPKn</p>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ppkn1" id="ppkn1" value="<?= $nilai['ppkn1']; ?>" required>
        <?= form_error('ppkn1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ppkn2" id="ppkn2" value="<?= $nilai['ppkn2']; ?>" required>
        <?= form_error('ppkn2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ppkn3" id="ppkn3" value="<?= $nilai['ppkn3']; ?>" required>
        <?= form_error('ppkn3', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ppkn4" id="ppkn4" value="<?= $nilai['ppkn4']; ?>" required>
        <?= form_error('ppkn4', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ppkn5" id="ppkn5" value="<?= $nilai['ppkn5']; ?>" required>
        <?= form_error('ppkn5', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>

    <!-- B INDONESIA -->
    <div class="row mt-3">
      <div class="col-md-2">
        <p>B. Indonesia</p>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="b_indonesia1" id="b_indonesia1" value="<?= $nilai['b_indonesia1']; ?>" required>
        <?= form_error('b_indonesia1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="b_indonesia2" id="b_indonesia2" value="<?= $nilai['b_indonesia2']; ?>" required>
        <?= form_error('b_indonesia2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="b_indonesia3" id="b_indonesia3" value="<?= $nilai['b_indonesia3']; ?>" required>
        <?= form_error('b_indonesia3', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="b_indonesia4" id="b_indonesia4" value="<?= $nilai['b_indonesia4']; ?>" required>
        <?= form_error('b_indonesia4', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="b_indonesia5" id="b_indonesia5" value="<?= $nilai['b_indonesia5']; ?>" required>
        <?= form_error('ppkn5', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>

    <!-- MATEMATIKA -->
    <div class="row mt-3">
      <div class="col-md-2">
        <p>Matematika</p>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="matematika1" id="matematika1" value="<?= $nilai['matematika1']; ?>" required>
        <?= form_error('matematika1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="matematika2" id="matematika2" value="<?= $nilai['matematika2']; ?>" required>
        <?= form_error('matematika2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="matematika3" id="matematika3" value="<?= $nilai['matematika3']; ?>" required>
        <?= form_error('matematika3', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="matematika4" id="matematika4" value="<?= $nilai['matematika4']; ?>" required>
        <?= form_error('matematika4', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="matematika5" id="matematika5" value="<?= $nilai['matematika5']; ?>" required>
        <?= form_error('matematika5', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>

    <!-- IPA -->
    <div class="row mt-3">
      <div class="col-md-2">
        <p>IPA</p>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ipa1" id="ipa1" value="<?= $nilai['ipa1']; ?>" required>
        <?= form_error('ipa1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ipa2" id="ipa2" value="<?= $nilai['ipa2']; ?>" required>
        <?= form_error('ipa2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ipa3" id="ipa3" value="<?= $nilai['ipa3']; ?>" required>
        <?= form_error('ipa3', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ipa4" id="ipa4" value="<?= $nilai['ipa4']; ?>" required>
        <?= form_error('ipa4', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ipa5" id="ipa5" value="<?= $nilai['ipa5']; ?>" required>
        <?= form_error('ipa5', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>

    <!-- IPS -->
    <div class="row mt-3">
      <div class="col-md-2">
        <p>IPS</p>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ips1" id="ips1" value="<?= $nilai['ips1']; ?>" required>
        <?= form_error('ips1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ips2" id="ips2" value="<?= $nilai['ips2']; ?>" required>
        <?= form_error('ips2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ips3" id="ips3" value="<?= $nilai['ips3']; ?>" required>
        <?= form_error('ips3', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ips4" id="ips4" value="<?= $nilai['ips4']; ?>" required>
        <?= form_error('ips4', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="ips5" id="ips5" value="<?= $nilai['ips5']; ?>" required>
        <?= form_error('ips5', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>

    <!-- B INGGRIS -->
    <div class="row mt-3">
      <div class="col-md-2">
        <p>B. Inggris</p>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="b_inggris1" id="b_inggris1" value="<?= $nilai['b_inggris1']; ?>" required>
        <?= form_error('b_inggris1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="b_inggris2" id="b_inggris2" value="<?= $nilai['b_inggris2']; ?>" required>
        <?= form_error('b_inggris2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="b_inggris3" id="b_inggris3" value="<?= $nilai['b_inggris3']; ?>" required>
        <?= form_error('b_inggris3', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="b_inggris4" id="b_inggris4" value="<?= $nilai['b_inggris4']; ?>" required>
        <?= form_error('b_inggris4', '<small class="text-danger pl-3">', '</small>'); ?>

      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" name="b_inggris5" id="b_inggris5" value="<?= $nilai['b_inggris5']; ?>" required>
        <?= form_error('b_inggris5', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>
    <hr>
    <!-- SCAN RAPORT -->
    
    
    <div class="form-group row">
      <label for="raport" class="col-sm-2 col-form-label">Scan Raport (PDF)</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="raport" name="raport" <?= $nilai == null ? 'required' : '' ?>>
        <?= form_error('raport', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
    </div>

    <?php 
      if ($file_raport != null) {
        echo "<a href=".  base_url('/pendaftaran/download_raport') ." class='btn btn-primary'>Download Raport</a>";
        echo "<span class='ml-2'>". $file_raport['filename'] ."</span>";
      }
    ?>

    <br>
    <hr>
    <button type="submit" name="tambah" class="btn btn-primary float-right">Simpan Data</button>
  </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->