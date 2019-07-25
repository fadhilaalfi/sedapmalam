
	<section  id="reservation"  class="description_content">
            
	<div class="bookonlinewrapper">
    <div class="container" id="bookonline">
    <h3 class="wow fadeInUp" data-wow-delay="0.3s"> ORDER HERE</h3>
    <?= validation_errors() ?>
    <?= form_open(base_url().'user/order') ?>
	<input type="text" name="nama" class="name wow zoomIn" value="<?= $_SESSION['nama'] ?>" readonly> 
	 <input hidden="true" type="text" name="username" class="email wow zoomIn" value="<?= $_SESSION['username'] ?>" readonly>
	 <input placeholder="Harga Satuan" class="email wow zoomIn" type="number" name="harga_sat" id="harga_sat" onchange="phpfunction()">
	 <select class="name wow zoomIn" name="id" id='menu'>
			<option>Pilih Paket</option>
			<?php foreach($menu as $a) :?>
				<option value="<?= $a->id ?>" onclick="pilih('<?= $a->harga ?>')">
				Paket <?= $a->paket." Nasi ".$a->jenis ?> 
				</option>
			<?php endforeach; ?>
		</select>
	
	<input placeholder="Jumlah Pesan" class="email wow zoomIn" type="number" name="jumlah" id='jumlah' onchange="phpfunction()">
	<input name="tgl_kirim" type="date" class="name wow zoomIn" placeholder="Tanggal Kirim">
	<input placeholder="Total Harga" class="email wow zoomIn" type="number" name="harga_tot" id="harga_tot" onclick="phpfunction()" readonly>
	<input type="text" class="name wow zoomIn" name="alamat" placeholder="Alamat">
	<input type="text" name="ket" class="email wow zoomIn" placeholder="Keterangan Tambahan"></textarea>
  
    
   

    <button class="booknow wow fadeInUp" type="submit"> ORDER NOW </button>
    
     <?= form_close() ?>

    
    
    </div>
</div>
</section>
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