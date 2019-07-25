
<br></br>
<div class="register-wrap">
<div class="register-html">
<div class='login'>
<h2 style="color: #F0FFF0">Add menu</h2>
</br></br>
    <?= validation_errors() ?>
    <?= form_open_multipart(base_url().'menu/add') ?>
	<input name='paket' placeholder='Paket' type='text'>
	<input name='jenis' placeholder='Jenis' type='text'>
	<input name='isi' placeholder='Isi' type='text'>
	<input name='harga' placeholder='Harga' type='text'>
	<input name='keterangan' placeholder='Keterangan' type='password'>
	<input name='gambar' placeholder='Foto' type='file'>
	</br>
	<td rowspan="2"><input class='animated' type='submit' value='Submit'></td>
	<td colspan="2"><?php echo $err_message;?></td>
	 <?= form_close() ?>
	 </div>
</div>
</div>
     
  </body>
</html>
