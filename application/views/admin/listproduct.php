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
			<div class="col-lg col-md-6">
				<table class="table table-bordered table-hover table-responsive">
					<thead class="thead-light">
						<tr>
							<th class="text-center">Image</th>
							<th class="text-center">Name</th>
							<th class="text-center">Detail</th>
							<th class="text-center">Price</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($product as $prd) : ?>
							<tr>
								<td><img src="<?= base_url('assets/img/product/') . $prd['image_product']; ?>"></td>
								<td><?= $prd['name_product']; ?></td>
								<td><?= $prd['detail_product']; ?></td>
								<td><?= $prd['price']; ?></td>
								<td><a class="badge badge-danger mx-auto" href="<?= base_url('admin/deleteproduct/') . $prd['id_product']; ?>" onclick="return confirm('Are you sure delete this product?');">Delete</a><a class="badge badge-success mx-auto" href="<?= base_url('admin/changeproduct/') . $prd['id_product']; ?>">Update</a></td>
							</tr>
						<?php endforeach ?>
					</tbody>

				</table>
			</div>
		</div>

	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
