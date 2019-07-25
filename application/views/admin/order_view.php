	<br></br>
<div class="login-wrap">
<div class="login-html">
<section class="section">
Hai, <?php echo $_SESSION['nama']; ?>

<br></br>
<div class="container">
      <div class="row">
	  <div class="col-md-12">
		<p class="paragraph"> <a href="<?= base_url()."order"?>"><button class="btn btn-warning">Order Siap buat</button> | 
		<a href="<?= base_url()."order/booking"?>"><button class="btn btn-warning">Bookingan</button>
		</p><br/><h3 style="color:white;"><?= $ket ?></h3>
		<table class ="table table-responsive" border=1 style="font-family: Palatino Linotype;font-size: 16px">
			<tr>
				<th colspan="7" align="center"><a href="<?= base_url()."order/add"?>"><button class="btn btn-primary">Add Order</button></th>
			</tr>
			<tr>
				<th>Pelanggan</th>
				<th>Makanan</th>
				<th>Jumlah</th>
				<th>Tanggal Pesan</th>
				<th>Tanggal Kirim</th>
				<th>Status Order</th>
				<th colspan="2">Action</th>
			</tr>

			<?php foreach($order as $u) : ?>
			<tr>
				<td><?=$u->nama ?></td>
				<td>Nasi <?=$u->jenis?> paket <?=$u->paket?></td>
				<td><?=$u->jumlah?></td>
				<td><?=$u->tgl_pesan?></td>
				<td><?=$u->tgl_kirim?></td>
				<td><?php if ($u->status_order==0) { echo "Selesai";
							} 
						else ($u->status_order==1) 
						?>
							</td>
				<td><a href=<?= base_url()."order/edit/".$u->id_order?>><button class="btn btn-primary" type="submit">Edit</button></a>
				</td><td>
            <a href=<?= base_url()."order/delete/".$u->id_order?>><button class="btn btn-primary" type="submit">Delete</button></td>
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
