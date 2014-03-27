<div class="imovels form">
<?php echo $this->Form->create('Imovel'); ?>
	<fieldset>
		<legend><?php echo __('Add Imovel'); ?></legend>
	<?php
		echo $this->Form->input('codigo');
		echo $this->Form->input('user_id');
		echo $this->Form->input('date_ins');
		echo $this->Form->input('tipo_id');
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('contrato_id');
		echo $this->Form->input('visitas');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Imovels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dados'), array('controller' => 'dados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dado'), array('controller' => 'dados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Destaques'), array('controller' => 'destaques', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destaque'), array('controller' => 'destaques', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalhes'), array('controller' => 'detalhes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalhe'), array('controller' => 'detalhes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fotos'), array('controller' => 'fotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foto'), array('controller' => 'fotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imovel Proprietarios'), array('controller' => 'imovel_proprietarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel Proprietario'), array('controller' => 'imovel_proprietarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lazers'), array('controller' => 'lazers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lazer'), array('controller' => 'lazers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Observations'), array('controller' => 'observations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Observation'), array('controller' => 'observations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Placas'), array('controller' => 'placas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Placa'), array('controller' => 'placas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Valores'), array('controller' => 'valores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valore'), array('controller' => 'valores', 'action' => 'add')); ?> </li>
	</ul>
</div>
