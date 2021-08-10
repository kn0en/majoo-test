<div class="container " style="margin-top: 15px;">
    <div style="margin-bottom: 20px;">
        <h2 class="text-white">Product</h2>
    </div>
    <div class="row">

        <?php foreach ($product as $prd) : ?>
            <div class="col-lg mb-3">
                <div style="margin-left: 15px;">
                    <div class="card mb-3 ml-2" style="width: 18rem;">
                        <img src="<?= base_url('assets/img/product/') . $prd['image_product']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><? $prd['name_product']; ?></h5>
                            <h6 class="card-title"><? $prd['price']; ?></h6>
                            <p class="card-text"><?= $prd['detail_product']; ?></p>
                            <a href="#" class="btn btn-primary">Buy</a>
                            <a href="#" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

</div>