<!-- Begin Page Content -->
<div class="container-fluid">

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

            <form class="form-inline my-2 my-lg-3" action="<?= base_url('seleksi/cari') ?>" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="cari" id="cari" autocomplete="off">
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

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $i = 1; ?>
                        <?php foreach ($index as $in) : ?>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $in['nopen']; ?></td>
                            <td><?= $in['fullname']; ?></td>
                            <td><?= $in['noun']; ?></td>
                            <td><?= $in['school']; ?></td>
                            <td>
                                <a href="<?= base_url('seleksi/detail') ?>" class="badge badge-success">Detail</a>
                                <a href="" class="badge badge-danger">Delete</a>
                            </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
