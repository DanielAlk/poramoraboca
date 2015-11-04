<?php
$extra_js.=<<<extra_js
$('#home_slider').slider(7000);
extra_js;
?>

<section class="absolute top left expand">
	<div class="relativize expand" id="home_slider">
		<div class="slide bg-bombonera360 expand active" id="slide_1">
			<div class="container">
				<div class="slide-caption top-p-75-xs">
					<div><img class="cabj-and-logo" src="<?php $asset->path('cabj-bombonera360.png') ?>"></div>
					<h2 class="text-gold italic"><big class="hashtag">#DeLaBomboneraNoNosVamos</big></h2>
					<p class="text-white">
						Bombonera360 es nuestra propuesta para la ampliación y reforma integral del Estadio Alberto J. Armando sin ceder la localía ni endeudar al Club.
						<br><br class="hidden-xs">
						<big class="text-gold italic bold">Se puede.</big>
					</p>
					<a class="btn btn-primary" target="_blank" href="http://bombonera360.com.ar/">VER PROYECTO</a>
				</div>
			</div>
			<div class="absolute bottom slide-image slide-image-1">
				<div>
					<img src="<?php $asset->path('ameal-pergolini.png') ?>">
				</div>
			</div>
		</div>
		<div class="slide bg-banderas expand" id="slide_2">
			<div class="container">
				<div class="slide-caption">
					<div class="space-S-50 space-S-0-xs">
						<img class="pull-left cancel-pull-xs space-E-15" src="<?php $asset->path('icon-heart-big.png') ?>">
						<span class="h3 uppercase italic hidden-xs"><big>El Patrón Bermudez, director deportivo.</big></span>
						<div class="h3 uppercase italic visible-xs">El Patrón Bermudez, director deportivo.</div>
					</div>
					<p class="text-white">Junto a Regenhardt y Aníbal Matellán, presentaron un proyecto integral que abarca el fútbol amateur, las divisiones inferiores y el plantel profesional.</p>
					<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modal_patron">CONOCÉ MÁS</a>
				</div>
			</div>
			<div class="absolute bottom slide-image slide-image-space-left">
				<img src="<?php $asset->path('patron-bermudez.png') ?>">
			</div>
		</div>
		<div class="slide bg-discurso expand" id="slide_3">
			<div class="container">
				<div class="slide-caption">
					<div class="space-S-30"><img src="<?php $asset->path('vorterix.png') ?>"></div>
					<h2 class="h1 uppercase italic">Lanzamiento de campaña</h2>
					<p class="text-white">Si no lo viste en vivo miralo ahora.<br>4 de Junio, 19:05 hs.</p>
					<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modal_campaign_video">MIRÁ EL VIDEO</a>
				</div>
			</div>
		</div>
		<div class="bottom expand-x slider-indicators text-center">
			<a class="active" href="#slide_1"></a>
			<a href="#slide_2"></a>
			<a href="#slide_3"></a>
		</div>
	</div>
</section>
<?php include 'modals/_patron.php' ?>
<?php include 'modals/_campaign_video.php' ?>