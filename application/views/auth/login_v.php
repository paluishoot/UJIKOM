<h3>Halaman Login</h3>

<?php echo $form_open ?>
<p>
	<?php echo $label_email ?>
	<?php echo $input_email ?>
</p>
<p>
	<?php echo $label_password ?>
	<?php echo $input_password ?>
</p>
<p>
	<?php
	$nama_lengkap = $this->session->userdata('nama_lengkap');
	echo "Selamat Datang {$nama_lengkap} !";
	?>
</p>
<p>
	<?php echo anchor('auth/hapus_session', 'Hapus Session Nama Lengkap') ?>
</p>
<p>
	<?php
	$pesan = $this->session->flashdata('pesan');
	echo $pesan;
	?>
</p>
<?php echo $submit ?>
<?php $form_close ?>