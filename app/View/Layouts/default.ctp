<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		// Main css
		echo $this->Html->css(array('main','../js/libs/bxslider/jquery.bxslider.css'));

		// Meta
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div class="container">
		
		<? echo $this->element('layout/header'); ?>
		
		<div role='main' class='main'>
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
		</div>
		
		<? echo $this->element('layout/footer'); ?>

	</div>
	
	<!-- SQL DUMP -->
	<? echo $this->element('layout/sql-dump'); ?>

	<!-- Jquery Inicial -->
	<?php echo $this->Html->script(array('libs/jquery/jquery.min')); ?>

	<?php echo $this->Html->script(array('libs/bxslider/jquery.bxslider.min','libs/sly/sly','main')); ?>

</body>
</html>
