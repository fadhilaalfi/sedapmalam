
</br></br></br></br>

<table class="responstable">
  
  <tr>
    <th>Paket</th>
    <th>Jumlah</th>
    <th>Total Bayar</th>
	<th>Tanggal Kirim</th>
	<th>Alamat</th>
	<th>Bayar</th>
  </tr>
  <?php foreach ($order as $o){?>
  <tr>
    <td>Nasi <?= $o->jenis?> Paket <?= $o->paket?> </td>
    <td><?= $o->jumlah ?></td>
	<td><?= $o->total_bayar ?></td>
    <td><?= $o->tgl_kirim ?></td>
    <td><?= $o->alamat_kirim ?></td>
	<td>
	<?php if($o->status_bayar==0){?>
	<a href=<?= base_url()."user/bayar/".$o->id_order ?>><button class="btn btn-primary">Bayar</button></a>
	<?php }elseif($o->status_bayar==1){ 
		if($o->lunas==0){?>
			<a href=<?= base_url()."user/bayar/".$o->id_order ?>><button class="btn btn-primary">Lunasi</button></a>
		<?php }else{
			if($o->status_order==0){?>
			Transaksi sedang di proses
			<?php }else{?>
				Order selesai
			<?php }
			}} ?>
	</td>
  </tr>
 <?php  }?>

  
</table>

