<main role="main" class="container">
	<?php #$this->load->view('layouts/_alert') ?>
	<div class="row">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-body">
							Kategori: <strong><?= isset($category) ? $category : 'Semua Kategori' ?></strong>
							<span class="float-right">
								Urutkan Harga: <a href="<?= base_url("/shop/sortby/asc") ?>" class="badge badge-danger">Termurah</a> | <a href="<?= base_url("/shop/sortby/desc") ?>" class="badge badge-danger">Termahal</a>
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<?php foreach($content as $row) : ?>
				<div class="col-md-4">
					<div class="card mb-3">
						<img src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="" height="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title"><b><?= $row->product_title ?></b></h5>
							<i class="card-text text-muted"><?= $row->penulis ?></i>
							<h5 class="card-text"><strong>Rp<?= number_format($row->price, 0, ',', '.') ?>,-</strong></h5>
							
							<a href="<?= base_url("/shop/category/$row->category_slug") ?>" class="badge badge-danger"><i class="fas fa-tags"></i> <?= $row->category_title ?></a>
						</div>
						<div class="card-footer">
							<form action="<?= base_url("/cart/add") ?>" method="POST">
								<input type="hidden" name="id_product" value="<?= $row->id ?>">
								<div class="input-group">
									<input type="number" name="qty" value="1" class="form-control">
									<div class="input-group-append">
										<button class="btn btn-danger"><i class="bi bi-cart mr-2"></i>Beli</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>

			<nav aria-label="Page navigation example">
				<?= $pagination ?>
			</nav>
		</div>
		
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">
							Pencarian
						</div>
						<div class="card-body">
							<form action="<?= base_url("/shop/search") ?>" method="POST">
								<div class="input-group">
									<input type="text" name="keyword" placeholder="Judul/Penulis" value="<?= $this->session->userdata('keyword') ?>" class="form-control">
									<div class="input-group-append">
										<button class="btn btn-danger" type="submit">
											<i class="fas fa-search"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">
							Kategori
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><a href="<?= base_url('/') ?>">Semua Kategori</a></li>
							<?php foreach(getCategories() as $category) : ?>
							<li class="list-group-item"><a href="<?= base_url("/shop/category/$category->slug") ?>"><?= $category->title ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

