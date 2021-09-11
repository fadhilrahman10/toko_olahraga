<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Create New Product</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="row my-3">
						<div class="col">
							<label>Kode Barang</label>
							<input type="text" class="form-control" value="<?= $kode_barang; ?>" name="kode_barang" readonly>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label>Nama Barang</label>
							<input type="text" class="form-control" placeholder="Product Name" name="nama_barang">
						</div>
						<div class="col">
							<label>Merk Barang</label>
							<input type="text" class="form-control" placeholder="Merk Product" name="merk_barang">
						</div>
					</div>
					<div class="row my-3">
						<div class="col">
							<label>Jenis Barang</label>
							<select class="form-select" name="jenis_barang">
								<option selected>Select Product Type</option>
								<option value="Aksesoris">Aksesoris</option>
								<option value="Baju">Baju</option>
								<option value="Bola">Bola</option>
								<option value="Sepatu">Sepatu</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label>Stok Barang</label>
							<input type="number" class="form-control" placeholder="Stok" name="stok_barang">
						</div>
						<div class="col">
							<label>Harga Barang</label>
							<input type="text" class="form-control" placeholder="Price" name="harga_barang">
						</div>
					</div>
					<div class="row my-3">
						<div class="col">
							<label for="formFile" class="form-label">Upload Gambar</label>
							<input class="form-control form-control-md" type="file" name="gambar" id="formFile">
						</div>
					</div>
					<div class="row">
						<div class="col ">
							<button type="submit" class="btn btn-primary float-end">
								Create
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</main>
