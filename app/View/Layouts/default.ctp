<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<!-- Footer -->
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>

	<!-- Scripts -->
	<script>
		navigator.userAgent.match("MSIE")&&document.write('<script src="js/libs/jquery/jquery-1.9.1.min.js"><\/script>')||document.write('<script src="js/libs/jquery/jquery-2.0.2.min.js"><\/script>');
	</script>
	<?php echo $this->Html->script(array('plugins','main','chart')); ?>
</body>
</html>
