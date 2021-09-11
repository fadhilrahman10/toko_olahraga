<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Data Product</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
				<a href="<?= base_url('products/create'); ?>" class="btn btn-primary">Create New Product</a>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-10">
				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong><span data-feather="check-circle"></span></strong> <?= $this->session->flashdata('success'); ?>.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php endif ?>
				<table class="table" id="example">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Gambar</th>
							<th scope="col">Nama</th>
							<th scope="col">Merk</th>
							<th scope="col">Jenis</th>
							<th scope="col">Stok</th>
							<th scope="col">Harga</th>
							<th scope="col">Handle</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($products as $product) : ?>
							<tr>
								<th scope="row"><?= $no++; ?></th>
								<td width="100"><img src="<?= base_url(); ?>assets/img/product/<?= $product['gambar']; ?>" alt="" class="w-75 img-thumbnail"></td>
								<td><?= $product['nama_barang']; ?></td>
								<td><?= $product['merk_barang']; ?></td>
								<td><?= $product['jenis_barang']; ?></td>
								<td><?= $product['stok_barang']; ?></td>
								<td><?= $product['harga_barang']; ?></td>
								<td>
									<a href="<?= base_url('products/update'); ?>/<?= $product['kode_barang']; ?>" class="badge bg-success text-decoration-none">Edit</a>
									<a href="<?= base_url('products/delete'); ?>/<?= $product['kode_barang']; ?>" class="badge bg-danger text-decoration-none" onclick="return confirm('anda yakin?')">Hapus</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</main>
