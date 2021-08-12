<div class="container" style="margin-bottom: 30px; ">

    <div style="margin-bottom: 20px;">
        <h2 class="text-white"> Detail Order</h2>
    </div>
    <div class="row">
        <div class="col-lg-4 ">
            <div class="card mb-3" style="width: 550px; height: 500px;">
                <div class="row g-0">
                    <div class="col-md-4" style="margin-top: 20px; margin-left: 15px;">
                        <div class="card-title" style="width: 300px;">
                            <h3><b>Detail Product</b></h3>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-4" style="margin-top: 35px; margin-left: 15px;">
                        <img src="<?= base_url('assets/img/product/') . $product['image_product']; ?>" class="img" style="width: 200px;">
                    </div>
                    <div class="col-md-6" style="margin-left: 15px;">
                        <div class="card-body">
                            <h5 class="card-title"><b><?= $product['name_product'] ?></b></h5>
                            <h6 class="card-subtitle">Rp. <?= $product['price'] ?></h6>
                            <hr>
                            <p class="card-text" style="text-align: justify;"><?= $product['detail_product']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4" style="margin-left: 250px;">
            <div class="card mb-3" style="width: 600px; height: 550px;">
                <div class="row g-0">
                    <div class="col-md-4" style="margin-top: 20px; margin-left: 15px;">
                        <div class="card-title" style="width: 300px;">
                            <h3><b>Buyer Information</b></h3>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body py-1" style="margin-left: 15px; margin-right: 15px;">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Full name</label>
                                    <input type="text" class="form-control" id="inputPassword4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="inputState">State</label>
                                    <input type="text" class="form-control" id="inputState">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="text-center" style="margin-top: 30px;">
                                <button type="submit" class="btn btn-success" style="width: 150px;">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>