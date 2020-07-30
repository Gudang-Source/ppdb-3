<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">Nama :</label>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $user['name']; ?>">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= $user['email']; ?>">
        </div>
    </form>

    

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

