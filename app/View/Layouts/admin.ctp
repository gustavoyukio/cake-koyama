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
			'admin/main','admin/menu', 'admin/table', 'admin/splashy'
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
				<a href='/admin' style='display:block; height:60px; width:300px;'> &nbsp; </a>
			</div>
			<!-- Fim do Logo Content -->

			<!-- User Details -->
			<div id="user">

				<div style='float:left; width:300px; display:block; color:#f8ffff;'>
					Seja Bem Vindo, <span style='color:#ee82ee;'> nome </span>
					<a href='logout.php'> [ Deslogar-se ] </a>
						
				</div>
					
			</div>
			<!-- Fim do User Details -->

		</div>
		<!-- Fim do Logo -->

	</div>
	<!-- Fim do Header -->
	
	<!-- Navbar -->
	<nav role='navigation' class='navbar clear c12' id='cssmenu'>
		<ul>
		   <li class='active'><a href='index.html'><span>Home</span></a></li>
		   <li class='has-sub'><a href='#'><span>Imóveis</span></a>
		      <ul>
		         <li class='has-sub'><a href='#'><span>Inserir</span></a>
		            <ul>
		               <li class='last'><a href='add'><span>Novo Imóvel</span></a></li>
		            </ul>
		         </li>
		         <li class='has-sub'><a href='#'><span>Listar</span></a>
		            <ul>
		               <li class='last'><a href='#'><span>Listar Imóveis</span></a></li>
		            </ul>
		         </li>
		         <li class='has-sub'><a href='#'><span>Opções</span></a>
		            <ul>
		               <li class='last'><a href='#'><span>Destacar</span></a></li>
		            </ul>
		         </li>
		      </ul>
		   </li>
		   <li class='has-sub'><a href='#'><span>Relatórios</span></a>
		      <ul>
		         <li class='has-sub'><a href='#'><span>Imóveis</span></a>
		            <ul>
		               <li><a href='#'><span>Placas</span></a></li>
		               <li><a href='#'><span>Ativos</span></a></li>
		               <li><a href='#'><span>Captação</span></a></li>
		               <li><a href='#'><span>Visitas</span></a></li>
		               <li><a href='#'><span>Inativos</span></a></li>
		               <li class='last'><a href='#'><span>Similares</span></a></li>
		            </ul>
		         </li>
		         <li class='has-sub'><a href='#'><span>Interno</span></a>
		            <ul>
		               <li class='last'><a href='#'><span>Chamados</span></a></li>
		            </ul>
		         </li>
		      </ul>
		   </li>
		   <li class='has-sub'><a href='#'><span>Adicionais</span></a>
		      <ul>
		         <li class='has-sub'><a href='#'><span>Adicionar</span></a>
		            <ul>
		               <li><a href='#'><span>Bairro</span></a></li>
		               <li class='last'><a href='#'><span>Cidade</span></a></li>
		            </ul>
		         </li>
		         <li class='has-sub'><a href='#'><span>Jornal e Outros</span></a>
		            <ul>
		               <li><a href='#'><span>Classificados</span></a></li>
		               <li class='last'><a href='#'><span>Visitas de Clientes</span></a></li>
		            </ul>
		         </li>
		      </ul>
		   </li>
		   <li class='has-sub'><a href='#'><span>Chamados</span></a>
		      <ul>
		         <li><a href='#'><span>Abrir Novo</span></a></li>
		         <li><a href='#'><span>Listar</span></a></li>
		         <li class='has-sub'><a href='#'><span>Administrativo</span></a>
		            <ul>
		               <li class='last'><a href='#'><span>Listar Todos</span></a></li>
		            </ul>
		         </li>
		      </ul>
		   </li>
		   <li class='has-sub'><a href='#'><span>Usuários</span></a>
		      <ul>
		         <li class='has-sub'><a href='#'><span>Interno</span></a>
		            <ul>
		               <li class='last'><a href='#'><span>Corretores</span></a></li>
		            </ul>
		         </li>
		         <li class='has-sub'><a href='#'><span>Imóveis</span></a>
		            <ul>
		               <li><a href='#'><span>Clientes</span></a></li>
		               <li class='last'><a href='#'><span>Proprietários</span></a></li>
		            </ul>
		         </li>
		      </ul>
		   </li>
		   <li class='has-sub last'><a href='#'><span>Notícias</span></a>
		      <ul>
		         <li><a href='#'><span>Adicionar</span></a></li>
		         <li class='last'><a href='#'><span>Editar</span></a></li>
		      </ul>
		   </li>
		</ul>
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
<script>
	navigator.userAgent.match("MSIE")&&document.write('<script src="/js/admin/libs/jquery/jquery-1.9.1.min.js"><\/script>')||document.write('<script src="/js/admin/libs/jquery/jquery-2.0.2.min.js"><\/script>');
</script>
<?php
	echo $this->Html->script(array('admin/libs/canvas/jquery.peity.min','admin/plugins','admin/main'));
?>

<?php echo $this->element('sql_dump'); ?>

</body>
</html>
