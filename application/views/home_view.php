<html>
	<head>
		<meta charset="UTF-8">
		<title>Home</title>
		<link rel="stylesheet" href=<?php echo base_url()."assets/beranda/css/normalize.css"?>>
		<link rel="stylesheet" href=<?php echo base_url()."assets/css/contact.css"?>>
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
		<link rel="stylesheet" href=<?php echo base_url()."assets/booking/csss/style.css"?>>
		<link rel="stylesheet" href=<?php echo base_url()."assets/booking/csss/animate.css"?>>
		<script type="text/javascript" src="js/MyJQ.js"></script>
    <script src="assets/booking/js/jquery.localScroll.min.js" type="text/javascript"></script>
	<script src="assets/booking/js/jquery.scrollTo.min.js" type="text/javascript"></script> 
    <script src="assets/booking/js/wow.min.js" type="text/javascript"></script> 
	<script src="assets/booking/js/jquery.js"></script> 
	<script src="assets/booking/js/jquery.glide.js"></script>
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
						<li><a class="navactive color_animation" href=<?php echo base_url()."#top"?>>Welcome</a></li>
						<li><a class="color_animation" href=<?php echo base_url()."#story"?>>About</a></li>
						<li><a class="color_animation" href=<?php echo base_url()."#pricing"?>>Menu</a></li>
						<li><a class="color_animation" href=<?php echo base_url()."#reservation"?>>Order</a></li>
						<li><a class="color_animation" href=<?php echo base_url()."#contact"?>>Contact</a></li>
						<?php
		if($this->session->has_userdata('username')){
			if ($_SESSION['status']=='admin') {?>
			<li><a class="color_animation" href=<?php echo base_url()."admin"?>>Hi <?= $_SESSION['username'] ?> !</a></li>
			<?php }else if ($_SESSION['status']='user'){?>
			<li><a class="color_animation" href=<?php echo base_url()."user"?>>Hi <?= $_SESSION['username'] ?> !</a></li>
			<?php }else { ?>
			<li><a class="color_animation" href=<?php echo base_url()."login"?>>Login</a></li>
			<?php }
		}else{?>
			<li><a class="color_animation" href=<?php echo base_url()."login"?>>Login</a></li>
		<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	
	<div id="top" class="starter_container bg">
		<div class="follow_container">
			<div class="col-md-6 col-md-offset-3">
			<h2 class="top-title"> Sedap Malam</h2>
			<h2 class="white second-title">" Let's choice and make it order "</h2>
			<hr>
			</div>
		</div>
	</div>

	<section id="story" class="description_content">
		<div class="text-content container">
			<div class="col-md-6">
				<h1>About us</h1>
				<div class="fa fa-cutlery fa-2x"></div>
				<p class="desc-text"> Sedap Malam Catering merupakan sebuah catering yang menyediakan beberapa jenis paket makanan mulai dari porsi kecil hingga porsi besar. Catering ini merupakan milik ibu Listyani
				yang bertempat tinggal di gang Sedap Malam, maka dari itu catering ini diberi nama Sedap Malam Catering. Sedap Malam Catering dengan layanan yang 24 jam dijamin tidak menguras kantong dan dapat menyesuaikan
				acara yang diadakan. Selain harga yang ekonomis, masalah rasa tidak diragukan lagi. Delicious food ever</p>
			</div>
			<div>
				<div class="img-section">
				<img src="assets/beranda/images/lis.jpg" width="320" height="450" align="center" >
				</div>
			</div>
		</div>
	</section>
	
	<section id ="pricing" class="description_content">
		<div class="pricing background_content">
			<h1>Various Menu</h1>
		</div>
		<div class="text-content container"> 
		<div class="container">
		<div class="row">
		<div id="w">
			<ul id="filter-list" class="clearfix">
			<ul class="grid cs-style-2">
				<?php foreach($menu as $m) { ?>				
		<div class="col-md-3 col-sm-6">
			<figure>
				<img src=<?php echo base_url().$m->foto ?> alt="food" width="200px" height="200px">
				<figcaption>
					<h3><?= $m->harga ?></h3>
					<span>Nasi <?= $m->jenis ?> Paket <?= $m->paket ?></span>
					<a href=<?= base_url()."portfolio_post"?>>Take a look</a>
				</figcaption>
			</figure>
		</div>
				<?php } ?>
				</ul>
			</ul>
		</div>
		</div>
		</div>
		</div>
	</section>
                                
								
	
	<section  id="reservation"  class="description_content">
            <div class="featured background_content">
                <h1>Order Now!</h1>
            </div>
			</br>
    <a href=<?= base_url()."user/order" ?>><button class="booknow wow fadeInUp"> ORDER NOW </button></a>

</section>

<section  id="contact"  class="description_content">
		<div class="featured background_content">
			<h1>Contact Us</h1>
		</div>
		<div class="text-content container">
			<div class="inner contact">
				<h2>If you want to contact me</h2>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.1170819228987!2d112.78033081431994!3d-7.227484394782503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9b463809e3f%3A0x8db9f71738b84137!2sGg.+Teratai%2C+Tanah+Kali+Kedinding%2C+Kenjeran%2C+Kota+SBY%2C+Jawa+Timur+60124!5e0!3m2!1sid!2sid!4v1495266661515" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				<p>
					No telpon :
					<br/>
					Email :
				</p>
			</div>
		</div>
	</section>    

</body>
</html>
