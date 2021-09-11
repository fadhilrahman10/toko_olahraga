<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.87.0">
	<title>Dashboard Template · Bootstrap v5.1</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



	<!-- Bootstrap core CSS -->
	<!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<link href="<?= base_url(); ?>/assets/css/dashboard.css" rel="stylesheet">

	<?php if (isset($styles)) : ?>
		<?php foreach ($styles as $style) : ?>
			<link href="<?= $style; ?>">
			</link>
		<?php endforeach; ?>
	<?php endif ?>

</head>

<body>

	<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="<?= base_url(); ?>">Company name</a>
		<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
		<div class="navbar-nav">
			<div class="nav-item text-nowrap">
				<a class="nav-link px-3" href="<?= base_url('auth/logout'); ?>">Sign out</a>
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<div class="row">
