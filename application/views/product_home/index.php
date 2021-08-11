<div class="container " style="margin-bottom: 30px; ">
    <div style="margin-bottom: 20px;">
        <h2 class="text-white">Product</h2>
    </div>
    <div class="row">

        <?php foreach ($product as $prd) : ?>
            <div class="col-lg mb-3">
                <div style="margin-left: 15px;">
                    <div class="card">
                        <img src="<?= base_url('assets/img/product/') . $prd['image_product']; ?>" class="card-img-top card-img align-content-sm-center">
                        <div class="card-body ">
                            <h5 class="card-title"  style="text-align: center;"><b><?= $prd['name_product']; ?></b></h5>
                            <h6 class="card-subtitle" style="text-align: center;"><b>Rp. <?= $prd['price']; ?></b></h6>
                            <hr>
                            <p class="card-text" style="text-align: center;"><?= $prd['detail_product']; ?></p>
                            <hr>
                            <a href="#" class="btn btn-primary">Buy</a>
                            <a href="#" class="btn btn-success float-right">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

</div>