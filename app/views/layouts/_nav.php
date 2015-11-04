<header class="absolute top expand-x">
	<div class="bg-blue relative">
		<div class="absolute left"><a href="<?php echo $path->pages_home() ?>"><img class="brand" src="<?php $asset->path('logo.png') ?>"></a></div>
		<div class="menu">
			<nav>
				<span><a class="uppercase" href="<?php echo $path->pages_home() ?>">home</a></span>
				<span><a class="uppercase" href="<?php echo $path->pages_management() ?>">Logros de Gestión</a></span>
				<span><a class="uppercase" href="<?php echo $path->pages_proposal() ?>">Propuesta 2015</a></span>
				<!--span><a class="uppercase" href="<?php echo $path->pages_schedule() ?>">Agenda</a></span-->
				<span><a class="uppercase" href="<?php echo $path->pages_community() ?>">Agrupación JXB</a></span>
				<span><a class="uppercase" href="#" data-toggle="modal" data-target="#modal_participate">Participar</a></span>
			</nav>
		</div>
		<div class="menu-button"><a href="javascript:void(0);"><i class="glyphicon glyphicon-list"></i></a></div>
	</div>
</header>