
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