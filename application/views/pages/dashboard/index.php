<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<?php $user = $this->session->userdata('user'); ?>
		<h1 class="h2">Welcome, <?= $user['username']; ?></h1>
	</div>
</main>
