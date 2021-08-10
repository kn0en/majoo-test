<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>

    <div class="col-lg-8">
        <?= form_open_multipart('admin/changeproduct'); ?>

        <input type="hidden" id="idproduct" name="idproduct" value="<?= isset($product['id_product']); ?>"></input>

        <div class="form-group row mb-3">
            <label for="productName" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="productName" name="productName" value="<?= isset($product['name_product']); ?>">
                <?= form_error('productName', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="productDetail" class="col-sm-2 col-form-label">Product Detail</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="productDetail" name="productDetail" value="<?= isset($product['detail_product']); ?>"></input>
                <?= form_error('productDetail', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="price" name="price" value="<?= isset($product['price']); ?>">
                <?= form_error('price', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <div class="form-group row mb-3">
            <div class="col-sm-2">Image</div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="<?= base_url('assets/img/product/') . isset($product['image_product']); ?> " class="img-thumbnail">
                    </div>
                    <div class="col-sm-7">
                        <div class="mb-3">
                            <label for="imageproduct" class="form-label">Choose image</label>
                            <input class="form-control" type="file" id="imageproduct" name="imageproduct">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row mb-3 justify-content-end">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Update Product</button>
            </div>

        </div>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->