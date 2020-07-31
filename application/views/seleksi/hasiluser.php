<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Hasil Seleksi</h1>

    <div class="row">

        <div class="col-lg-12">

            <?= form_error(
                'menu',
                '<div class="alert alert-danger" role="alert">',
                '</div>'
            ); ?>

            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No Pendaftaran</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Ujian Nasional</th>
                        <th scope="col">Asal Sekolah</th>
                        <th scope="col">Score Nilai</th>
                        <th scope="col">Hasil</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($user != null) { ?>
                <tr>
                    <td><?= $biodata['nopen']; ?></td>
                    <td><?= $biodata['fullname']; ?></td>
                    <td><?= $biodata['noun']; ?></td>
                    <td><?= $biodata['school']; ?></td>
                    <td><?= $user['score']; ?></td>
                    <td><?= $user['accepted'] == true ? 'Lulus' : 'Tidak lulus' ?></td>
                </tr>
                <?php } else { ?>
                    <tr>
                        <td colspan="4">Mohon Maaf Anda Tidak Lulus</td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <p><?= $this->pagination->create_links() ?? '' ?></p>
    </div>
