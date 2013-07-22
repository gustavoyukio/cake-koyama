<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

		// Estilo
		echo $this->Html->css(array(
			'main','navbar', 'table'
		));

	?>
</head>
<body>

<!-- Container -->
<div id="tudo" role='main' class='grid w1200'>
	
	<!-- Header -->
	<div id="header" class='c12'>

		<!-- Logo -->
		<div id="logo">
			
			<!-- Logo Content -->
			<div id="logoContent">
				<a href='index.php' style='display:block; height:60px; width:300px;'> &nbsp; </a>
			</div>
			<!-- Fim do Logo Content -->

			<!-- User Details -->
			<div id="user">
				<div style='float:left; width:300px; display:block; color:#f8ffff;'>
					Seja Bem Vindo, <span style='color:#ee82ee;'> nome </span><br/>
					<span style='color:yellow;'>
						0 Chamadas Nao Lidas
                    </span> Novas Mensagens  
                    <br/>
					<a href='logout.php'> [ Deslogar-se ] </a>
						
				</div>
				<img src='imagens/person.png' style='float:right; display:block; margin-left:10px;' />
				<br class='clear' />
					
			</div>
			<!-- Fim do User Details -->

		</div>
		<!-- Fim do Logo -->

	</div>
	<!-- Fim do Header -->
	
	<!-- Navbar -->
	<nav role='navigation' class='navbar clear c12'>
        a
	</nav>
	<!-- Fim do Navbar -->

	<!-- Main Content -->
	<div id="content" class='main-content clear'>
		
		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

	</div>
	<!-- Fim do Main Content -->

	<!-- Footer -->
	<div id="footer">

	</div>

</div>

<!-- Script -->
<?php
	echo $this->Html->script(array('jquery-2.0.2.min','plugins','main'));
?>
<?php echo $this->element('sql_dump'); ?>

</body>
</html>
