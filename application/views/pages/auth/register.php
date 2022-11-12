<main role="main" class="container">
	<?php $this->load->view('layouts/_alert') ?>
	<div class="row">
		<div class="col-md-5 mx-auto">
			<div class="card p-4 shadow-sm">
				<div class="section-header">
					<p>Daftar ke <span>Lovebook</span></p>
					<h2>Lengkapi formulir registrasi untuk melanjutkan</h2>
				</div>
				<div class="card-body">
					<?= form_open('register', ['method' => 'POST']) ?>
					<div class="form-group">
						<label for="">Nama</label>
						<?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'placeholder' => 'Masukkan nama', 'autofocus' => true]) ?>
						<?= form_error('name') ?>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukkan alamat email aktif', 'required' => true]) ?>
						<?= form_error('email') ?>
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password minimal 8 karakter', 'required' => true]) ?>
						<?= form_error('password') ?>
					</div>
					<div class="form-group">
						<label for="">Konfirmasi Password</label>
						<?= form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password yang sama', 'required' => true]) ?>
						<?= form_error('password_confirmation') ?>
					</div>
					<div class="d-flex justify-content-center">
						<button type="submit" class="btn btn-danger mt-2">Register</button>
					</div>
					<?= form_close() ?>
					<div class="d-flex justify-content-center mt-3">
						<p class="login-register-text">Anda sudah punya akun? <a href="<?=base_url('login')?>">Login </a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>