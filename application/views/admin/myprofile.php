<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>
    
    <div class="col-lg-8">
            <?= $this->session->flashdata('messageEditProfile') ?>
        </div>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['fullname'] ?></h5>
                    <p class="card-text"><?= $user['username']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

