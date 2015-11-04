<!DOCTYPE html>
<html>
<head>
	<?php include 'layouts/_head.php'; ?>
	<link href="<?php $asset->css(); ?>?1504112040" rel="stylesheet" type="text/css">
</head>

<body class="<?php __('device'); ?> <?php echo $params['action']; ?>">
	<?php include 'layouts/_nav.php'; ?>
	<?php include $app->view; ?>
	<?php include 'layouts/_footer.php'; ?>
	<?php include 'modals/_participate.php'; ?>
	<script src="<?php $asset->js(); ?>?1504112040" type="application/javascript"></script>
	<script>
		$(function() {
			$('.scroll').scrollWindow({ device: "<?php __('device') ?>" });
			<?php __('extra_js') ?>
		});
	</script>
	<?php if (isset($log)) echo "<script>console.log(JSON.parse('$log'));</script>"; ?>
</body>
</html>