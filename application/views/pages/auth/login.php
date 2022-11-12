<main role="main" class="container">
	<?php $this->load->view('layouts/_alert') ?>
	<div class="row">
		<div class="col-md-5 mx-auto">
			<div class="card p-4 shadow-sm">
				<div class="card-body">
					<img src="<?= base_url() ?>/assets/img/logolovebookFIX.png" style="width:150px; height:150px;" class="rounded mx-auto d-block">
					<div class="section-header">
						<p>Login ke<span> Lovebook</span></p>
						<h2>Masuk untuk melanjutkan</h2>
					</div>
					<?= form_open('login', ['method' => 'POST']) ?>
					<div class="form-group">
						<label for="">Email</label>
						<?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukkan alamat email', 'required' => true]) ?>
						<?= form_error('email') ?>
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password', 'required' => true]) ?>
						<?= form_error('password') ?>
					</div>
					<div class="d-flex justify-content-center">
						<button type="submit" class="btn btn-danger d-flex align-content mt-2">Login</button>
					</div>
					<?= form_close() ?>
					<div style="text-align:center" class="mt-3">
						<p class="login-register-text">Belum punya akun? <a href="<?=base_url('register')?>">Daftar sekarang</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>