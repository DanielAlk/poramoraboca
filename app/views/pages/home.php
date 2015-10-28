<?php
$extra_js.=<<<extra_js
$('#home_slider').slider();
extra_js;
?>

<section class="absolute top left expand">
	<div class="relativize expand" id="home_slider">
		<div class="slide bg-bombonera360 expand active" id="slide_1">
			<div class="container">
				<div class="slide-caption">
					<div><img src="<?php $asset->path('cabj-bombonera360.png') ?>"></div>
					<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
					<a class="btn btn-primary" href="<?php echo $path->pages_home() ?>">CONOCE MAS</a>
				</div>
			</div>
			<div class="absolute bottom slide-image">
				<img src="<?php $asset->path('jorge-amor-ameal.png') ?>">
			</div>
		</div>
		<div class="slide bg-banderas expand" id="slide_2">
			<div class="container">
				<div class="slide-caption">
					<div class="space-S-50">
						<img class="pull-left space-E-15" src="<?php $asset->path('jxb-big.png') ?>">
						<span class="h3 uppercase italic">El "Patrón" Bermudez se sumó al proyecto de Jorge Amor Ameal</span>
					</div>
					<p class="text-white">El histórico caudillo de Boca Juniors se unió a Juntos por Boca para hacerse cargo de la dirección deportiva del Xeneize. Junto a Oscar Regenhardt y Aníbal Matellán, llevará adelante un proyecto integral que abarca el fútbol amateur, las divisiones inferiores y el fútbol profesional.</p>
					<a class="btn btn-primary" href="<?php echo $path->pages_home() ?>">CONOCE MAS</a>
				</div>
			</div>
			<div class="absolute bottom slide-image">
				<img src="<?php $asset->path('patron-bermudez.png') ?>">
			</div>
		</div>
		<div class="slide bg-discurso expand" id="slide_3">
			<div class="container">
				<div class="slide-caption">
					<div class="space-S-30"><img src="<?php $asset->path('vorterix.png') ?>"></div>
					<h2 class="h1 uppercase italic">Lanzamiento de campaña</h2>
					<p class="text-white">Si no lo viste en vivo miralo ahora.<br>4 de Junio, 19:05 hs.</p>
					<a class="btn btn-primary" href="<?php echo $path->pages_home() ?>">MIRA EL VIDEO</a>
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