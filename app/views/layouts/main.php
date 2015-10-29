<!DOCTYPE html>
<html>
<head>
	<?php include 'layouts/_head.php'; ?>
	<link href="<?php $asset->css(); ?>?291020151324" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include 'layouts/_nav.php'; ?>
	<?php include $app->view; ?>
	<?php include 'layouts/_footer.php'; ?>
	<?php include 'modals/_participate.php'; ?>
	<script src="<?php $asset->js(); ?>?291020151324" type="application/javascript"></script>
	<script>
		$(function() {
			<?php __('extra_js'); ?>
		});
	</script>
	<?php if (isset($log)) echo "<script>console.log(JSON.parse('$log'));</script>"; ?>
</body>
</html>