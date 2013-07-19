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
			'main','navbar'
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
	<nav role='navigation' class='navbar clearfix c12'>
        <ul>
        	
        	<!--item 000 -->
        	<li><p><a href="/admin">Home</a></p></li>
        	
        	<!-- Item 001 -->
        	<li><p>Imóveis</p>
        		<ul>
        			<li><a href="#"> Inserir </a>
        				<ul>
        					<li><a href="index.php?vista=imoveis&modo=inserir">Adicionar Novo Imóvel	</a></li>
        				</ul>
        			</li>
        			<li><a href="#"> Listar </a>
        			    <ul>
        					<li><a href="index.php?vista=imoveis&modo=listar">Listar Imóveis</a></li>
        				</ul>
        			</li>
        			<li><a href="#">Opções de Imóvel</a>
        			    <ul>
        					<li><a href="index.php?vista=imoveis&modo=destaque#">Destacar Imóvel</a></li>
        				</ul>
        			</li>
        		</ul>
        	</li>
        	
        	<!-- Item 002 -->
        	<li><p>Relatórios</p>
        		<ul>
        			<li><a href="#"> De Imóveis </a>
        				<ul>
        					<li><a href="index.php?vista=relatorios&modo=placa">Relatórios de Placas	</a></li>
        					<li><a href="index.php?vista=relatorios&modo=ativo">Relatórios de Ativos	</a></li>
        					<li><a href="index.php?vista=relatorios&modo=captacao">Relatórios de Captação	</a></li>
        					<li><a href="index.php?vista=relatorios&modo=visita">Relatórios de Visitas	</a></li>
        					<li><a href="index.php?vista=relatorios&modo=todosInativos">Relatórios de Inativos	</a></li>
        				</ul>
        			</li>
        			<li><a href=""> Interno </a>
        			    <ul>
        					<li><a href="index.php?vista=relatorios&modo=chamado">Relatórios de Chamados	</a></li>
        				</ul>
        			</li>
        		</ul>
        	</li>
        	
        	<!-- Item 003 -->
        	<li><p>Adicionais</p>
        		<ul>
        			<li><a href="#"> Opções De Imóveis </a>
        				<ul>
        					<li><a href="index.php?vista=adicionais&modo=bairro"> Bairros/Cidades 				</a></li>
        				</ul>
        			</li>
        			<li><a href=""> Jornal e Outros </a>
        			    <ul>
        					<li><a href="index.php?vista=adicionais&modo=classificados"> Classificados			</a></li>
        				</ul>
        			</li>
        		</ul>
        	</li>
        	
        	<!-- Item 004 -->
        	<li><p>Chamados</p>
        		<ul>
        			<li><a href="index.php?vista=chamados&modo=inserir"> Inserir Novo Chamado			</a></li>
        			<li><a href="index.php?vista=chamados&modo=listar"> Listar Seus Chamados			</a></li>
        		</ul>
        	</li>
        	
        	<!-- Item 005 -->
        	<li><p> Usuários </p>
        		<ul>
        			<li><a href="#"> Interno </a>
        				<ul>
        					<li><a href="index.php?vista=usuarios&modo=user"> Usuários 				</a></li>
        				</ul>
        			</li>
        			<li><a href=""> Imóveis </a>
        			    <ul>
        					<li><a href="index.php?vista=usuarios&modo=cliente"> Clientes				</a></li>
        					<li><a href="index.php?vista=usuarios&modo=proprietario"> Proprietários			</a></li>
        				</ul>
        			</li>
        		</ul>
        	</li>

        	<!-- Item 006 -->
        	<li><p> Notícias </p>
        		<ul>
        			<li><a href="#"> Adicionar </a>
        				<ul>
        					<li><a href="#"> Adicionar Nova Notícia	</a></li>
        				</ul>
        			</li>
        		</ul>
        	</li>

        </ul>
	</nav>
	<!-- Fim do Navbar -->

	<!-- Main Content -->
	<div id="content">
		
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
