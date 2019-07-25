<br></br>
<div class="register-wrap">
<div class="register-html">
<div class='login'>
<h2 style="color: #F0FFF0">Pembayaran</h2>
</br></br>
<div class="row">
<div class="col-lg-12">
	<table class="table">
	<tr>
		<td>Nama</td>
		<td><?= $order->nama ?></td>
	</tr>
	<tr>
		<td>Menu</td>
		<td>Paket <?= $order->paket." Nasi ".$order->jenis ?></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><?= $order->harga ?></td>
	</tr>
	<tr>
		<td>Jumlah Pesanan</td>
		<td><?=$order->jumlah?></td>
	</tr>
	<tr>
		<td>Total Bayar</td>
		<td><?=$order->total_bayar?></td>
	</tr>
	<tr>
		<td>Tanggal Kirim</td>
		<td><?=$order->tgl_kirim?></td>
	</tr>
	<tr>
		<td>Alamat Kirim</td>
		<td><?=$order->alamat_kirim?></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><?=$order->keterangan_order?></td>
	</tr>
	<tr>
		<td>Jenis Pembayaran</td>
		<td><?=$order->jenis_bayar?></td>
	</tr>
	<tr>
		<td>Harga Bayar</td>
		<td><?= $order->harga ?></td>
	</tr>
	<tr>
		<td>ID Transaksi</td>
		<td><?= $order->id_transaksi ?></td>
	</tr>
	<tr>
		<td colspan="2"><a href=<?= base_url()."bayar" ?> ><button class="btn btn-primary" type="button">Kembali</button></a></td>
	</tr>
    </table>
 </div>
</div>
</div>
</div>
</div>
     
  </body>
</html>