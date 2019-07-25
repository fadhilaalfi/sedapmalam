<html>
  <head>
    <title><?= $judul?></title>
	<link rel='stylesheet prefetch' href=<?php echo base_url().'http://fonts.googleapis.com/css?family=Open+Sans:600'?>>
	
			<link rel="stylesheet" href=<?php echo base_url()."assets/css/loginstyle.css"?>>
	  <link rel="stylesheet" href=<?php echo base_url()."assets/beranda/css/normalize.css"?>>
    <link rel="stylesheet" href=<?php echo base_url()."assets/beranda/css/main.css"?> media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href=<?php echo base_url()."assets/beranda/css/bootstrap.css"?>>
    <link rel="stylesheet" href=<?php echo base_url()."assets/beranda/css/style-portfolio.css"?>>
    <link rel="stylesheet" href=<?php echo base_url()."assets/beranda/css/picto-foundry-food.css"?>>
    <link rel="stylesheet" href=<?php echo base_url()."assets/beranda/css/jquery-ui.css"?>>
	<link rel="stylesheet" href=<?php echo base_url()."assets/css/table.css"?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=<?php echo base_url()."assets/beranda/css/font-awesome.min.css"?> rel="stylesheet">
    <link rel="icon" href=<?php echo base_url()."favicon-1.ico"?> type="image/x-icon">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" href=<?php echo base_url()."assets/booking/csss/style.css"?>>
		<link rel="stylesheet" href=<?php echo base_url()."assets/booking/csss/animate.css"?>>
		<script type="text/javascript" src="js/MyJQ.js"></script>
    <script src=<?php echo base_url()."assets/booking/js/jquery.localScroll.min.js"?> type="text/javascript"></script>
	<script src=<?php echo base_url()."assets/booking/js/jquery.scrollTo.min.js"?> type="text/javascript"></script> 
    <script src=<?php echo base_url()."assets/booking/js/wow.min.js"?> type="text/javascript"></script> 
	<script src=<?php echo base_url()."assets/booking/js/jquery.js"?></script> 
	<script src=<?php echo base_url()."assets/booking/js/jquery.glide.js"?></script>
  </head>
  <body>
  <div class="container">
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
            <li><a class="<?php if($judul=='Welcome'){ echo 'navactive';} ?> color_animation" href=<?php echo base_url()."user"?>>Welcome</a></li>
            <li><a class="<?php if($judul=='Menu'){ echo 'navactive';} ?> color_animation" href=<?php echo base_url()."user/menu"?>>Menu</a></li>
            <li><a class="<?php if($judul=='Order'){ echo 'navactive';} ?> color_animation" href=<?php echo base_url()."user/order"?>>Order</a></li>
            <li><a class="<?php if($judul=='Payment'){ echo 'navactive';} ?> color_animation" href=<?php echo base_url()."user/payment"?>>Payment</a></li>
            <li><a class="<?php if($judul=='Logout'){ echo 'navactive';} ?> color_animation" href=<?php echo base_url()."logout"?>>Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav> 
  </div>