	<br></br>
	<div class="login-wrap">
<div class="login-html">
Hai, <?php echo $_SESSION['nama']; ?>

<br></br>
<section class="section">
<div class="container">
      <div class="row">
	  <div class="col-md-12">
		<table class ="table" border=1 style="font-family: Palatino Linotype;font-size: 16px">
		<!--	<tr>
				<td colspan="6" align="center"><a href=<?= base_url()."admin/u_add" ?>><button type="button">TAMBAH ADMIN</button></a></td>
			</tr> -->
			<tr>
				<th colspan="7" align="center"><a href="<?= base_url()."admin/u_add"?>"><button class="btn btn-primary">Add admin</button></th>
			</tr>
			<tr>
				<th>Username</th>
				<th>Password</th>
				<th>Nama</th>
				<th>Status</th>
				<th colspan="2">Action</th>
			</tr>

			<?php foreach($akun as $u) : ?>
          <tr>
						<td><?=$u->username?></td>
						<td><?=$u->password?></td>
						<td><?=$u->nama?></td>
            <td><?=$u->status?></td>
						<td><a href=<?= base_url()."admin/u_edit/".$u->username?>><button class="btn btn-primary" type="submit">Edit</button></a>
						</td><td>
            <a href=<?= base_url()."admin/u_delete/".$u->username?>><button class="btn btn-primary" type="submit">Delete</button></td>
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
