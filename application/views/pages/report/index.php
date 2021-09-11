<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Laporan</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Laporan Barang
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<button class="btn btn-outline-dark my-2" type="button" onclick="printContent('barang')">Print</button>
								<table class="table table-borderless">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Nama</th>
											<th scope="col">Merk</th>
											<th scope="col">Jenis</th>
											<th scope="col">Stok</th>
											<th scope="col">Harga</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach ($products as $product) : ?>
											<tr>
												<th scope="row"><?= $no++; ?></th>
												<td><?= $product['nama_barang']; ?></td>
												<td><?= $product['merk_barang']; ?></td>
												<td><?= $product['jenis_barang']; ?></td>
												<td><?= $product['stok_barang']; ?></td>
												<td><?= $product['harga_barang']; ?></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Laporan Supplier
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<button class="btn btn-outline-dark my-2" type="button" onclick="printContent('supplier')">Print</button>
								<table class="table table-borderless">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Nama</th>
											<th scope="col">No Hp</th>
											<th scope="col">Alamat</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach ($suppliers as $supplier) : ?>
											<tr>
												<th><?= $no++; ?></th>
												<td><?= $supplier['nama_supplier']; ?></td>
												<td><?= $supplier['no_hp']; ?></td>
												<td><?= $supplier['alamat']; ?></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="barang" class="d-none d-print-block">
			<div class="row">
				<h1 class="text-center">Laporan Barang</h1>
				<hr>
				<div class="col-md-12">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nama</th>
								<th scope="col">Merk</th>
								<th scope="col">Jenis</th>
								<th scope="col">Stok</th>
								<th scope="col">Harga</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; ?>
							<?php foreach ($products as $product) : ?>
								<tr>
									<th scope="row"><?= $no++; ?></th>
									<td><?= $product['nama_barang']; ?></td>
									<td><?= $product['merk_barang']; ?></td>
									<td><?= $product['jenis_barang']; ?></td>
									<td><?= $product['stok_barang']; ?></td>
									<td><?= $product['harga_barang']; ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<small>Tanggal : <?= date('d F Y'); ?></small>
				</div>
			</div>
			<div class="row my-5 justify-content-between">
				<div class="col-4 text-center">
					<p>Dibuat oleh, </p>
					<p style="margin-bottom: -0.3rem;" class="mt-5"><strong>Fauzan</strong></p>
					<p>Admin</p>
				</div>
				<div class="col-4 text-center">
					<p>Diterima oleh, </p>
					<p style="margin-bottom: -0.3rem;" class="mt-5"><strong>Sanjaya</strong></p>
					<p>Pemilik</p>
				</div>
			</div>
		</div>
		<div id="supplier" class="d-none d-print-block">
			<div class="row">
				<h1 class="text-center">Laporan Supplier</h1>
				<hr>
				<div class="col-md-12">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nama</th>
								<th scope="col">No Hp</th>
								<th scope="col">Alamat</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; ?>
							<?php foreach ($suppliers as $supplier) : ?>
								<tr>
									<th><?= $no++; ?></th>
									<td><?= $supplier['nama_supplier']; ?></td>
									<td><?= $supplier['no_hp']; ?></td>
									<td><?= $supplier['alamat']; ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<small>Tanggal : <?= date('d F Y'); ?></small>
				</div>
			</div>
			<div class="row my-5 justify-content-between">
				<div class="col-4 text-center">
					<p>Dibuat oleh, </p>
					<p style="margin-bottom: -0.3rem;" class="mt-5"><strong>Fauzan</strong></p>
					<p>Admin</p>
				</div>
				<div class="col-4 text-center">
					<p>Diterima oleh, </p>
					<p style="margin-bottom: -0.3rem;" class="mt-5"><strong>Sanjaya</strong></p>
					<p>Pemilik</p>
				</div>
			</div>
		</div>
	</div>
	</div>
</main>
