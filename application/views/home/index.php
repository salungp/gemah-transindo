<section class="banner" id="home" style="background-size: cover; background: url(<?php echo base_url($banner['image']); ?>);">
	<div class="container" style="position: relative;">
		<div class="row">
			<div class="col-md-6 d-flex align-items-center" style="height: 540px;">
				<div>
					<h1 class="mb-3 font-weight-bold"><?php echo $banner['text']; ?></h1>
					<p class="width-100"><?php echo $banner_description['text']; ?></p>
					<a href="#armada" class="btn btn-lg btn-primary">Ayo mulai</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section armada-kami" id="armada">
	<div class="container">
		<h3 class="section-title text-center">Armada Kami</h3>

		<div class="row">
			<?php foreach($armada as $armadaItem) : ?>
			<div class="col-md-4">
				<div class="card">
					<img src="<?php echo base_url($armadaItem['image']); ?>" alt="product image" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title"><?php echo $armadaItem['text']; ?></h5>
						<a href="https://api.whatsapp.com/send?phone=<?php echo $nomor_wa['text']; ?>&text=Halo%20Gemah%20Transindo%20Saya%20mau%20tanya..." class="btn btn-sm btn-success"><i class="fa fa-comments"></i> Pesan sekarang</a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section layanan" id="layanan">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="section-title"><?php echo $layanan_section['text']; ?></h2>

				<ul>
					<?php foreach($layanan as $k) : ?>
					<li><?php echo $k['text']; ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="col-md-6">
				<img src="<?php echo $layanan_section['image']; ?>" style="width: 100%">
			</div>
		</div>
	</div>
</section>

<section class="section why">
	<div class="container">
		<h2 class="section-title text-center">Kenapa sewa di Gemah Transindo</h2>

		<div class="row">
			<?php foreach($kelebihan as $k) : ?>
			<div class="col-md-3">
				<div class="item">
					<div class="d-flex justify-content-center">
						<img src="<?php echo base_url($k['image']); ?>" class="ml-auto mb-3" alt="icon" style="width: 40%;margin: 0 auto;">
					</div>
					<h5 class="text-center font-weight-bold"><?php echo $k['title']; ?></h5>
					<p class="text-center"><?php echo $k['text']; ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section tentang">
	<div class="container">
		<h2 class="section-title text-center">Tentang kami</h2>

		<p class="text-center"><?php echo $tentang['text']; ?></p>
	</div>
</section>

<section class="section kontak" id="kontak">
	<div class="container">
		<h2 class="section-title">Kontak kami</h2>
		<div class="row justify-content-between">
			<div class="col-md-4">
				<h4><?php echo $kontak_atas['title']; ?></h4>
				<p><?php echo $kontak_atas['text']; ?></p>
			</div>
			<div class="col-md-3">
				<?php foreach($kontak_list as $key) : ?>
					<div>- <?php echo $key['text']; ?></div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		©2020 Gemah transindo - All rights reserved.
	</div>
</footer>