<section class='quick-search'>
	<form action="" method="" class='wrapper'>
		<fieldset>
			<legend> Procura Rápida </legend>

			<div class='control'>
				<label> Tipo de Contrato </label>
				<select name="tipo">
					<option value=''> --- Tipos --- </option> 
					<option value=''> Locação </option> 
					<option value=''> Venca </option> 
				</select>
			</div>
			<div class='control'>
				<label> Categoria </label>
				<select name="tipo">
					<option value=''> --- Categoria --- </option> 
					<option value=''> Residencial </option> 
					<option value=''> Comercial </option> 
				</select>
			</div>
			<div class='control'>
				<label> Tipo de Imóvel </label>
				<select name="tipo">
					<option value=''> --- Tipos --- </option> 
					<option value=''> Casa </option> 
					<option value=''> Apartamento </option> 
				</select>
			</div>
			<div class='control'>
				<label> Cidades </label>
				<select name="tipo">
					<option value=''> --- Cidades --- </option> 
					<option value=''> São Paulo </option> 
					<option value=''> São Bernardo do Campo </option> 
				</select>
			</div>
			<div class='control'>
				<label> Dormitórios </label>
				<select name="tipo">
					<option value=''> --- Dormitórios --- </option> 
					<option value=''> 1 Dorm. </option> 
					<option value=''> 2 Dorms. </option> 
				</select>
			</div>
			<div class='control'>
				<input type="submit" value="Procurar" />
			</div>			
		</fieldset>
	</form>
</section>

<section class='quick-tools'>
	<ul class='wrapper'>
		<li>
			<h3> Lançamentos </h3>
			<figure>
				<?php echo $this->Html->image('quick-bg/novos.jpg'); ?>
				<figcaption> Confira os melhores lançamentos da temporada. <a href="#"> ver <i class='icon-arrow-right'></i> </a> </figcaption>
			</figure>
		</li>
		<li>
			<h3> Vendas </h3>
			<figure>
				<?php echo $this->Html->image('quick-bg/novos.jpg'); ?>
				<figcaption> Confira nossos destaques na Venda <a href='#'> ver <i class='icon-arrow-right'></i> </a> </figcaption>
			</figure>
		</li>
		<li>
			<h3> Locações </h3>
			<figure>
				<?php echo $this->Html->image('quick-bg/novos.jpg'); ?>
				<figcaption> Confira nossos destaques na Locação <a href='#'> ver <i class='icon-arrow-right'></i> </a>  </figcaption>
			</figure>
		</li>
		<li>
			<h3> Residencial </h3>
			<figure>
				<?php echo $this->Html->image('quick-bg/novos.jpg'); ?>
				<figcaption> Confira nossos melhores imóveis residenciais <a href='#'> ver <i class='icon-arrow-right'></i> </a>  </figcaption>
			</figure>
		</li>
		<li>
			<h3> Comercial </h3>	
			<figure>
				<?php echo $this->Html->image('quick-bg/novos.jpg'); ?>
				<figcaption> Confira nossos melhores imóveis comerciais <a href='#'> ver <i class='icon-arrow-right'></i> </a>  </figcaption>
			</figure>
		</li>
	</ul>
</section>

<!-- Destaques -->
<section class='list-items wrapper'>
	<h2> Novos e Lançamentos </h2>
	<article id="frame">
		<ul class='slidee'>
			<? for( $i = 0; $i < 15; $i++) : ?>
				<li> 
					<figure>
						<img src="img/casa.jpg" alt="" rel="">
						<h3 class='title'> Venda </h3>
						<figcaption class='info'>
							<ul>
								<li class='price'> R$ 15.000.000,00 </li>
								<li> São Paulo </li>
								<li> Morumbi </li>
								<li> Casa </li>
								<li> 3 Dorms </li>
								<li class='link'> <a href="" class='icon-share'> [+mais detalhes] </a> </li>
							</ul>
						</figcaption>
					</figure>
				</li>
			<? endfor; ?>						
		</ul>
	</article>
</section>

<!-- Novos -->
<section class='list-items wrapper'>
	<h2> Destaques </h2>
	<article id="frame2">
		<ul class='slidee'>
			<? for( $i = 0; $i < 15; $i++) : ?>
				<li> 
					<figure>
						<img src="img/casa.jpg" alt="" rel="">
						<h3 class='title'> Venda </h3>
						<figcaption class='info'>
							<ul>
								<li class='price'> R$ 15.000.000,00 </li>
								<li> São Paulo </li>
								<li> Morumbi </li>
								<li> Casa </li>
								<li> 3 Dorms </li>
								<li class='link'> <a href="" class='icon-share'> [+mais detalhes] </a> </li>
							</ul>
						</figcaption>
					</figure>
				</li>
			<? endfor; ?>						
		</ul>
	</article>
</section>

<!-- Seccoes -->
<section class='company-info'>
	<div class='wrapper'>
		<article>
			<hgroup>
				<h2 class='icon-info up'></h2>
				<h2 class='lower'> Sobre Nós </h2>
			</hgroup>
			<p> 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, qui, ad, error, quae nemo commodi ex quos vel accusamus magnam ea soluta atque suscipit doloribus aliquam! Iste, pariatur ex dolorum.
			</p>
		</article>
		<article>
			<hgroup>
				<h2 class='icon-office up'></h2>
				<h2 class='lower'> Serviços </h2>
			</hgroup>
			<p> 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, qui, ad, error, quae nemo commodi ex quos vel accusamus magnam ea soluta atque suscipit doloribus aliquam! Iste, pariatur ex dolorum.
			</p>			
		</article>
		<article>
			<hgroup>
				<h2 class='icon-spinner up'></h2>
				<h2 class='lower'> Vantagens </h2>
			</hgroup>
			<p> 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, qui, ad, error, quae nemo commodi ex quos vel accusamus magnam ea soluta atque suscipit doloribus aliquam! Iste, pariatur ex dolorum.
			</p>			
		</article>
	</div>
</section>