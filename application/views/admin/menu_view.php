	<br></br>
	
	<div class="menu-wrap">
	<div class="menu-html">
Hai, <?php echo $_SESSION['nama']; ?>

<br></br>

  <!--  <h1 align="center">Menu Makananan</h1> -->
   <div class="col-md-12">
		<table class =  "table" border=1 style="font-family: Palatino Linotype;font-size: 16px">
			<!--<tr>
				<td colspan="6" align="center"><a href=<?= base_url()."menu/m_add" ?>><button type="button">TAMBAH ADMIN</button></a></td>
			</tr>-->
			<tr>
				<th colspan="7" align="center"><a href="<?= base_url()."menu/add"?>"><button class="btn btn-primary">Tambah Menu</button></th>
			</tr>
			<tr>
				<th>Paket</th><th>Jenis</th><th>Isi</th><th>Harga</th><th>Keterangan</th><th colspan="2">Action</th>
			</tr>

			<?php foreach($menu as $u) : ?>
          <tr>
						<td><?=$u->paket?></td>
						<td><?=$u->jenis?></td>
						<td><?=$u->isi?></td>
            <td><?=$u->harga?></td>
            <td><?=$u->keterangan?></td>
						<td><a href=<?= base_url()."menu/edit/".$u->id?>><button class="btn btn-primary" type="submit">Edit</button></a>
						</td><td>
            <a href=<?= base_url()."menu/delete/".$u->id?>><button class="btn btn-primary" type="submit">Delete</button></td>
  		<?php endforeach; ?>
		</table>
	</div>
  </body>
</html>
