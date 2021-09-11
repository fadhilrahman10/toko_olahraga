<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Data Supplier</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
				<a href="<?= base_url('suppliers/create'); ?>" class="btn btn-primary">Create new supplier</a>
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
							<th scope="col">Nama</th>
							<th scope="col">No Hp</th>
							<th scope="col">Alamat</th>
							<th scope="col">Handle</th>
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
								<td>
									<a href="<?= base_url('suppliers/update'); ?>/<?= $supplier['id_supplier']; ?>" class="badge bg-success text-decoration-none">Edit</a>
									<a href="<?= base_url('suppliers/delete'); ?>/<?= $supplier['id_supplier']; ?>" class="badge bg-danger text-decoration-none" onclick="return confirm('anda yakin?')">Hapus</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>
