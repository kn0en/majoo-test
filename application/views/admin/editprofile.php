<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('admin/editprofile'); ?>

            <div class="form-group row mb-3">
                <label for="fullName" class="col-sm-2 col-form-label">Full name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fullName" name="fullName" value="<?= $user['fullname']; ?>">
                    <?= form_error('fullName', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="userName" class="col-sm-2 col-form-label">User Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="userName" name="userName" value="<?= $user['username']; ?>"></input>
                    <?= form_error('userName', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row mb-3">
                <div class="col-sm-2">Image</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?> " class="img-thumbnail" id="imageupload">
                        </div>
                        <div class="col-sm-7">
                            <div class="mb-3">
                                <label for="profileImage" class="form-label">Choose image</label>
                                <input class="form-control" type="file" id="profileImage" name="profileImage"  onchange="previewFile(this);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-3 justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Edit Profile</button>
                </div>

            </div>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->