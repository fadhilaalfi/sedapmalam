	<br></br>
<div class="login-wrap">
<div class="login-html">
<section class="section">
Hai, <?php echo $_SESSION['nama']; ?>

<br></br>
<div class="container">
      <div class="row">
	  <div class="col-md-12">
		<table class ="table table-responsive" border=1 style="font-family: Palatino Linotype;font-size: 16px">
			<tr>
				<th>Pelanggan</th>
				<th>Makanan</th>
				<th>Jumlah</th>
				<th>Tanggal Pesan</th>
				<th>Tanggal Kirim</th>
				<th>Action</th>
			</tr>

			<?php foreach($bayar as $u) : ?>
			<tr>
				<td><?=$u->nama ?></td>
				<td>Nasi <?=$u->jenis?> paket <?=$u->paket?></td>
				<td><?=$u->jumlah?></td>
				<td><?=$u->tgl_pesan?></td>
				<td><?=$u->tgl_kirim?></td>
				<td><a href=<?= base_url()."bayar/edit/".$u->id_order?>><button class="btn btn-primary" type="submit">Detail</button></a>
				</td>
  				</tr>
  		<?php endforeach; ?>
		</table>
	</div>
	</div>
	</div>
	</section>
	</div>
	</div>
  </body>
</html>
