	<br></br>

<div class="sign-up-htm">
<div class="register-wrap">
<div class="register-html">
	<font style="color: #B0C4DE" size="50px" align="center"> Order Detail</font>
    <?= validation_errors() ?>
    <?= form_open(base_url().'order/edit/'.$order->id_order) ?>
      <table class="table" class="col-md-12">
	  </br>
      <tr>
        <td>Nama Lengkap</td>
        <td><?= $order->nama ?></td>
      </tr>
	  <input type="text" name="username" value="<?= $order->username ?>" readonly hidden='true'>
      <tr>
        <td>Menu</td>
        <td>
		<select name="id" id='menu'>
			<option>Pilih Paket</option>
			<?php foreach($menu as $a) :?>
				<option value="<?= $a->id ?>" onclick="pilih('<?= $a->harga ?>')" <?php if($a->id==$order->id){echo"selected='selected'";}?>>
				Paket <?= $a->paket." Nasi ".$a->jenis." Harga:".$a->harga  ?> 
				</option>
			<?php endforeach; ?>
		</select></td>
      </tr>
      <tr>
        <td>Harga Satuan</td>
        <td><input type="number" name="harga_sat" id="harga_sat" onchange="phpfunction()" value="<?= $order->harga?>" readonly></td>
      </tr>
      <tr>
        <td>Jumlah Pesan</td>
        <td><input type="number" name="jumlah" id='jumlah' onchange="phpfunction()" value="<?= $order->jumlah?>"></td>
      </tr>
      <tr>
        <td>Total Harga</td>
        <td><input type="number" name="harga_tot" id="harga_tot" onclick="phpfunction()"  value="<?= $order->total_bayar?>" readonly></td>
      </tr>
      <tr>
        <td>Tanggal Pesan</td>
        <td><?= $order->tgl_pesan?></td>
      </tr>
      <tr>
        <td>Tanggal Kirim</td>
        <td><input type="date" name="tgl_kirim" value="<?= $order->tgl_kirim?>"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" value="<?= $order->alamat_kirim?>"></td>
      </tr>
      <tr>
        <td>Keterangan Tambahan</td>
        <td><input type="text" name="ket" value="<?= $order->keterangan_order?>"></td>
      </tr>
      <tr>
        <td>Order Selesai</td>
        <td><select name="status_order">
			<option value="0" <?php if($order->status_order==0){echo "selected";}?>>Order masih dalam proses</option>
			<option value="1" <?php if($order->status_order==1){echo "selected";}?>>Order selesai</option>
		</select></td>
      </tr>
      <tr> 
		<td></td>
        <td><br/>
		<button class="btn btn-primary" type="submit">Submit</button></a>
        <a href=<?= base_url()."order" ?>><button class="btn btn-primary">Cancel</button></a>
		</td>
      </tr>
      </table>
	  
    <?= form_close() ?>

  </body>
</html>


<script>
function phpfunction(){
	var harga=document.getElementById('harga_sat').value;
	var jml=document.getElementById('jumlah').value;
	var total=harga*jml;
	document.getElementById("harga_tot").value = total;
}
function pilih(harga){
	document.getElementById("harga_sat").value = harga;
}
</script>