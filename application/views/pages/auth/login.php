<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.87.0">
	<title>Signin Template · Bootstrap v5.1</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


	<!-- Custom styles for this template -->
	<link href="signin.css" rel="stylesheet">
</head>

<body>

	<div class="container">
		<div class="row justify-content-center my-5">
			<div class="col-md-4">
				<main class="form-signin">
					<form action="" method="POST">
						<?php if ($this->session->flashdata('success')) : ?>
							<div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
						<?php endif ?>
						<?php if ($this->session->flashdata('gagal')) : ?>
							<div class="alert alert-danger"><?= $this->session->flashdata('gagal'); ?></div>
						<?php endif ?>
						<h1 class="h3 mb-3 fw-normal">Please Login</h1>
						<div class="form-floating">
							<input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
							<label for="floatingInput">Username</label>
						</div>
						<div class="form-floating">
							<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
							<label for="floatingPassword">Password</label>
						</div>
						<button class="w-100 btn btn-lg btn-primary my-4" type="submit">Sign in</button>
						<small class="text-muted">Belum punya akun? silahkan <a href="<?= base_url('auth/signUp'); ?>">Mendaftar</a></small>
					</form>
				</main>
			</div>
		</div>
	</div>



</body>

</html>
