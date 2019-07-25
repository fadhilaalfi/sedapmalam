
	<section  id="reservation"  class="description_content">
            
	<div class="bookonlinewrapper">
    <div class="container" id="bookonline">
    <h3 class="wow fadeInUp" data-wow-delay="0.3s"> PAY HERE</h3>
	<table class="table">
	    <?= validation_errors() ?>
    <?= form_open(base_url().'user/bayar/'.$order->id_order) ?>
	<tr>
		<td>Nama</td>
		<td><?= $_SESSION['nama'] ?></td>
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
		<td><input type="radio" name="pembayaran" value="Lunas" onclick="harga(<?=$order->total_bayar?>)"> Lunas
		<input type="radio" name="pembayaran" value="DP" onclick="harga2(<?=$order->total_bayar?>)"> DP
		</td>
	</tr>
	<tr>
		<td>Harga Bayar</td>
		<td><input type="text" name="bayar" id="bayar" readonly></td>
	</tr>
	<tr>
		<td>ID Transaksi</td>
		<td><input type="text" name="transaksi"></td>
	</tr>
		<input type="text" name="id_order" value=<?=$order->id_order?> hidden>
	<tr>
		<td colspan=2><button class="booknow wow fadeInUp" type="submit"> PAY NOW </button>
    </td>
	</tr>

    
     <?= form_close() ?>
	 

    </table>
    
    </div>
</div>
</section>
<script>
function harga(duit){
	document.getElementById("bayar").value = (duit);
}
function harga2(duit){
	document.getElementById("bayar").value = (duit/2);
}
</script>