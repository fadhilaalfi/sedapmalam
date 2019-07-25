	<br></br>

<div class="sign-up-htm">
<div class="register-wrap">
<div class="register-html">
	<font style="color: #B0C4DE" size="50px" align="center"> Edit User </font>
    <?= validation_errors() ?>
    <?= form_open(base_url().'admin/u_edit/'.$akun->username) ?>
      <table class="col-md-12">
	  </br>
      <tr>
        <td >Nama Lengkap</td>
        <td><input type="text" name="nama" value="<?= $akun->nama ?>"></td>
      </tr>
      <tr>
        <td>Username</td>
        <td><input type="text" name="username" value="<?= $akun->username ?>"></td>
      </tr>
      <tr>
        <td>No Telpon</td>
        <td><input type="text" name="notelp" value="<?= $akun->notelp ?>"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" value="<?= $akun->alamat ?>"></td>
		
      </tr>
      <tr> 
	  <td></td>
		
        <td>
		</br>
		<a href=<?= base_url()."admin/resetPass/".$akun->username ?>><button class="btn btn-primary">Reset Password</button></a>
		<br/><br/>
		<button class="btn btn-primary" type="submit">Submit</button></a>
        <a href=<?= base_url()."admin" ?>><button class="btn btn-primary">Cancel</button></a>
      </tr>
      </table>
	  
    <?= form_close() ?>

  </body>
</html>
