<html>
	<head>
		<title>Login</title>
		<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
		<link rel="stylesheet" href="assets/css/loginstyle.css">
	  <link rel="stylesheet" href=<?php echo base_url()."assets/beranda/css/normalize.css"?>>
    <link rel="stylesheet" href=<?php echo base_url()."assets/beranda/css/main.css"?> media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href=<?php echo base_url()."assets/beranda/css/bootstrap.css"?>>
    <link rel="stylesheet" href=<?php echo base_url()."assets/beranda/css/style-portfolio.css"?>>
    <link rel="stylesheet" href=<?php echo base_url()."assets/beranda/css/picto-foundry-food.css"?>>
    <link rel="stylesheet" href=<?php echo base_url()."assets/beranda/css/jquery-ui.css"?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=<?php echo base_url()."assets/beranda/css/font-awesome.min.css"?> rel="stylesheet">
    <link rel="icon" href=<?php echo base_url()."favicon-1.ico"?> type="image/x-icon">
	</head>
	<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="row">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=<?php echo base_url() ?>>Sedap Malam Catering</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav main-nav  clear navbar-right ">
            <li><a class="color_animation" href=<?php echo base_url()."#top"?>>Welcome</a></li>
            <li><a class="color_animation" href=<?php echo base_url()."#story"?>>About</a></li>
            <li><a class="color_animation" href=<?php echo base_url()."#pricing"?>>Menu</a></li>
            <li><a class="color_animation" href=<?php echo base_url()."#reservation"?>>Order</a></li>
            <li><a class="color_animation" href=<?php echo base_url()."#contact"?>>Contact</a></li>
			<?php
		if($this->session->has_userdata('username')){
			if ($_SESSION['status']=='admin') {?>
			<li><a class="navactive color_animation" href=<?php echo base_url()."admin"?>>Hi <?= $_SESSION['username'] ?> !</a></li>
			<?php }else if ($_SESSION['status']='user'){?>
			<li><a class="navactive color_animation" href=<?php echo base_url()."user"?>>Hi <?= $_SESSION['username'] ?> !</a></li>
			<?php }else { ?>
			<li><a class="navactive color_animation" href=<?php echo base_url()."login"?>>Login</a></li>
			<?php }
		}else{?>
			<li><a class="navactive color_animation" href=<?php echo base_url()."login"?>>Login</a></li>
		<?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>
		<div class="login-wrap">
		<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
		
		<div class="col-md-4"></div><div class="col-md-4">
			<div class="sign-in-htm">
				<?= validation_errors() ?>
				<?= form_open('login') ?>
					<div class="group">
						<label for="username" class="label">Username</label>
						<input name="username" type="text" class="input">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input name="pass" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<input type="submit" class="button" value="Sign In">
					</div>
				<?= form_close() ?>
			</div>
			</div>
			<div class="sign-up-htm">
			<?= validation_errors() ?>
			<?= form_open('register') ?>
				<div class="group">
					<label for="nama" class="label">Nama Lengkap</label>
					<input name="nama" type="text" class="input">
				</div>
				<div class="group">
					<label for="alamat" class="label">Alamat</label>
					<input name="alamat" type="text" class="input">
				</div>
				<div class="group">
					<label for="notelp" class="label">No Telepon</label>
					<input name="notelp" type="text" class="input">
				</div>
				<div class="group">
					<label for="username" class="label">Username</label>
					<input name="username" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass2" class="label">Ulangi Password</label>
					<input name="pass2" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Register">
				</div>
			<?= form_close() ?>
			</div>
		</div>
		</div>
		</div>
	</body>
</html>
