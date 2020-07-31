<!-- Begin Page Content -->
<div class="container-fluid p-5">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


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
                        <th scope="col">No</th>
                        <th scope="col">No Pendaftaran</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Ujian Nasional</th>
                        <th scope="col">Asal Sekolah</th>
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
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <p><?= $this->pagination->create_links() ?? '' ?></p>
    </div>
