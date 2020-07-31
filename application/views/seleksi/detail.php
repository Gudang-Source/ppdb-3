<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <!-- Card Biodata -->
    <div class="card mb-3" style="max-width: 900px;">
        <div class="row no-gutters">
            <div class="col-md-6">
                <div class="card-body">
                    <p class="card-title"><b>No Pendaftaran</b> :<?= $biodata["nopen"]; ?></p>
                    <p class="card-title"><b>NIK</b> :<?= $biodata["nik"]; ?></p>
                    <p class="card-title"><b>NISN</b></b> :<?= $biodata["nisn"]; ?></p>
                    <p class="card-title"><b>Nama Lengkap</b> :<?= $biodata['fullname']; ?></p>
                    <p class="card-title"><b>Sekolah Asal</b> :<?= $biodata["school"]; ?></p>
                    <p class="card-title"><b>Tahun Lulus</b> :<?= $biodata["year_graduated"]; ?></p>
                    <p class="card-text"><b>Jenis Kelamin</b> :<?= $biodata['gender']; ?></p>
                    <p class="card-text"><b>Tempat Lahir</b> :<?= $biodata['born_place']; ?></p>
                    <p class="card-text"><b>Tanggal Lahir</b> :<?= $biodata['date']; ?></p>
                    <p class="card-text"><b>Sekolah Asal</b> :<?= $biodata['school']; ?></p>
                    <p class="card-title"><b>Alamat</b> :<?= $biodata["alamat"]; ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <p class="card-title"><b>Nama Ayah : </b> <?= $biodata["father_name"] ?></p>
                    <p class="card-title"><b>Pekerjaan Ayah : </b> <?= $biodata["father_job"] ?></p>
                    <p class="card-title"><b>Alamat Ayah : </b> <?= $biodata["father_address"] ?></p>
                    <p class="card-title"><b>No Hp Ayah : </b> <?= $biodata["father_phone"] ?></p>
                    <hr>
                    <p class="card-title"><b>Nama Ibu : </b> <?= $biodata["mother_name"] ?></p>
                    <p class="card-title"><b>Pekerjaan Ibu : </b> <?= $biodata["mother_job"] ?></p>
                    <p class="card-title"><b>Alamat Ibu : </b> <?= $biodata["mother_address"] ?></p>
                    <p class="card-title"><b>No Hp Ibu : </b> <?= $biodata["mother_phone"] ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- END CARD Biodata -->

    <!-- Nilai Pendaftar -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Mata Pelajaran</th>
                <th scope="col">Semester 1</th>
                <th scope="col">Semester 2</th>
                <th scope="col">Semester 3</th>
                <th scope="col">Semester 4</th>
                <th scope="col">Semester 5</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Pend. Agama</th>
                <?php for ($i = 1; $i <= 5; $i++) {
                    echo "<th>". $raport['agama' . $i] . "</th>";
                }?>
            </tr>
            <tr>
                <th>PPKn</th>
                <?php for ($i = 1; $i <= 5; $i++) {
                    echo "<th>". $raport['ppkn' . $i] . "</th>";
                }?>
            </tr>
            <tr>
                <th>B. Indonesia</th>
                <?php for ($i = 1; $i <= 5; $i++) {
                    echo "<th>". $raport['b_indonesia' . $i] . "</th>";
                }?>
            </tr>
            <tr>
                <th>Matematika</th>
                <?php for ($i = 1; $i <= 5; $i++) {
                    echo "<th>". $raport['matematika' . $i] . "</th>";
                }?>
            </tr>
            <tr>
                <th>IPA</th>
                <?php for ($i = 1; $i <= 5; $i++) {
                    echo "<th>". $raport['ipa' . $i] . "</th>";
                }?>
            </tr>
            <tr>
                <th>IPS</th>
                <?php for ($i = 1; $i <= 5; $i++) {
                    echo "<th>". $raport['ips' . $i] . "</th>";
                }?>
            </tr>
            <tr>
                <th>B. Inggris</th>
                <?php for ($i = 1; $i <= 5; $i++) {
                    echo "<th>". $raport['b_inggris' . $i] . "</th>";
                }?>
            </tr>
        </tbody>
    </table>
    <!-- END Nilai Pendaftar -->

    <!-- Download Raport -->
    <?php 
      if ($file_raport != null) {
        echo "<a href=".  base_url('/pendaftaran/download_raport_by_id/'. $user_id) ." class='btn btn-primary'>Download Raport</a>";
        echo "<span class='ml-2'>". $file_raport['filename'] ."</span>";
      }
    ?>
    <!-- END Download RAPORT -->

    <!-- Approve Pendaftaran -->
    <div class="row mt-5">
        <div class="ml-auto mr-1">
            <a href="<?= base_url('/pendaftaran/approve/'. $user_id) ?>" class="btn btn-success">Approve Pendaftaran</a>
        </div>
        <div class="mr-auto">
            <a href="<?= base_url('/pendaftaran/revisi/'. $user_id) ?>" class="btn btn-secondary">Request Revisi</a>
        </div>
    </div>  
    <!-- END Apprive Pendaftaran -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->