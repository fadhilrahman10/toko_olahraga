<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
	<div class="position-sticky pt-3">
		<ul class="nav flex-column">
			<li class="nav-item">
				<a class="nav-link <?= $this->uri->uri_string() == 'homeController' ? 'active' : ''; ?>" aria-current="page" href="<?= base_url(); ?>">
					<span data-feather="home"></span>
					Dashboard
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $this->uri->uri_string() == 'products' ? 'active' : ''; ?>" href="<?= base_url('products'); ?>">
					<span data-feather="shopping-cart"></span>
					Products
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $this->uri->uri_string() == 'suppliers' ? 'active' : ''; ?>" href="<?= base_url('suppliers'); ?>">
					<span data-feather="users"></span>
					Supplier
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $this->uri->uri_string() == 'reports' ? 'active' : ''; ?>" href="<?= base_url('reports'); ?>">
					<span data-feather="bar-chart-2"></span>
					Reports
				</a>
			</li>
		</ul>

	</div>
</nav>
