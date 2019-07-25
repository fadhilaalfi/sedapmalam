
<div class="register-wrap">
<div class="register-html">
<div class='login'>
</br>
<h2 style="color: #F0FFF0">Edit menu</h2>
</br></br>
	
    <?= validation_errors() ?>
    <?= form_open_multipart(base_url().'menu/edit/'.$menu->id) ?>
	<input name='paket' placeholder='Paket' type='text' value='<?= $menu->paket?>'>
	<input name='jenis' placeholder='Jenis' type='text'  value='<?= $menu->jenis?>'>
	<input name='isi' placeholder='Isi' type='text'  value='<?= $menu->isi?>'>
	<input name='harga' placeholder='Harga' type='text'  value='<?= $menu->harga?>'>
	<input name='keterangan' placeholder='Keterangan' type='text'  value='<?= $menu->keterangan?>'>
	<img src="<?= base_url().$menu->foto ?>" width=300 height=300>
	<input name='foto' placeholder='Foto' type='file' value='<?= $menu->foto?>'>
	</br>
	<td rowspan="2"><input class='animated' type='submit' value='Submit'></td>
	 <?= form_close() ?>
    
  </body>
</html>
