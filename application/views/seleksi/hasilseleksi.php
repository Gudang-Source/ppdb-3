<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col">
            <a href="<?= base_url(); ?>/seleksi/prosesseleksi" class="btn btn-primary my-2">Proses Seleksi</a>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-12">

            <?= form_error(
                'menu',
                '<div class="alert alert-danger" role="alert">',
                '</div>'
            ); ?>

            <?= $this->session->flashdata('message'); ?>

            <form class="form-inline my-2 my-lg-3" action="<?= base_url('seleksi/carifromhasil') ?>" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="No Pendaftaran" name="cari" id="cari" autocomplete="off">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="tombolCari">Search</button>
            </form>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Pendaftaran</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Ujian Nasional</th>
                        <th scope="col">Asal Sekolah</th>
                        <th scope="col">Score Nilai</th>
                        <th scope="col">Hasil</th>
                    </tr>
                </thead>
                <tbody>
                   
                <?php foreach ($users as $user) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $user['nopen']; ?></td>
                    <td><?= $user['fullname']; ?></td>
                    <td><?= $user['noun']; ?></td>
                    <td><?= $user['school']; ?></td>
                    <td><?= $user['score']; ?></td>
                    <td><?= $user['accepted'] == true ? 'Lulus' : 'Tidak lulus' ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <p><?= $this->pagination->create_links() ?? '' ?></p>
    </div>
