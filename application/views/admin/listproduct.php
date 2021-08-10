<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('messageDelete') ?>
            <?= $this->session->flashdata('messageChangeData') ?>
        </div>

    <div class="row">
        <div class="col-lg">
            <table class="table table-bordered">
                <tr>
                    <th class="text-center">Image</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Detail</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Action</th>
                </tr>
                <?php foreach ($product as $prd) : ?>
                    <tr>
                        <td><img src="<?= base_url('assets/img/product/') . $prd['image_product']; ?>"></td>
                        <td><?= $prd['name_product']; ?></td>
                        <td><?= $prd['detail_product']; ?></td>
                        <td><?= $prd['price']; ?></td>
                        <td><a class="badge badge-danger float-right mr-3" href="<?=base_url('admin/deleteproduct/') . $prd['id_product'];?>" onclick="return confirm('Are you sure delete this product?');">Delete</a><a class="badge badge-success float-right mr-3" href="<?=base_url('admin/changeproduct/') . $prd['id_product'];?>">Update</a></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->