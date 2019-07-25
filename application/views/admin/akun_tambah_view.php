<br></br>
<div class="register-wrap">
<div class="register-html">
<div class='login'>
<h2 style="color: #F0FFF0">Add admin</h2>
    <?= validation_errors() ?>
    <?= form_open(base_url().'admin/u_add') ?>
	<br></br>
	<input name='nama' placeholder='Nama Lengkap' type='text'>
	<input name='username' placeholder='Username' type='text'>
	<input name='notelp' placeholder='No Telpon' type='text'>
	<input name='alamat' placeholder='Alamat' type='text'>
	<input name='pass' placeholder='Password' type='password'>
	<input name='pass2' placeholder='Ulangi Password' type='password'>
	<br></br>
	<td rowspan="2"><input class='animated' type='submit' value='Submit'></td>
	<td colspan="2"><?php echo $err_message;?></td>
	<?= form_close() ?>
</div>
</div>
</div>
  
	
      <!--<table>
    <tr>
        <td>Nama Lengkap</td>
        <td><input type="text" name="nama"></td>
      </tr> 
      <tr>
        <td>Username</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td>No Telpon</td>
        <td><input type="text" name="notelp"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="pass"></td>
      </tr>
      <tr>
        <td>Ulangi Password</td>
        <td><input type="password" name="pass2"></td>
      </tr>
      <tr>
        <td rowspan="2"><input type="submit" value="Submit">
        <a href=<?= base_url()."admin" ?>><input type="button" value="Cancel"></a></td>
      </tr> -->
    <!--  <tr> 
        <td colspan="2"><?php echo $err_message;?></td>
      </tr>
      </table> -->
   <!-- <?= form_close() ?> -->
	

  </body>
</html>
