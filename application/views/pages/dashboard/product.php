<div class="container-fluid">
	<div class="row">
		<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
			<div class="position-sticky pt-3 sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="<?= base_url('dashboard') ?>">
							<span data-feather="home" class="align-text-bottom"></span>
							Dashboard
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="<?= base_url('dashboard/product') ?>">
							<span data-feather="shopping-cart" class="align-text-bottom"></span>
							Data Produk
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('dashboard/orders') ?>">
							<span data-feather="file" class="align-text-bottom"></span>
							Data Transaksi
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('dashboard/users') ?>">
							<span data-feather="users" class="align-text-bottom"></span>
							Data Pelanggan
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('dashboard/reports') ?>">
							<span data-feather="bar-chart-2" class="align-text-bottom"></span>
							Laporan
						</a>
					</li>
				</ul>
			</div>
		</nav>