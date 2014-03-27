<div class="imovels index">
	<h2><?php echo __('Imovels'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_ins'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('contrato_id'); ?></th>
			<th><?php echo $this->Paginator->sort('visitas'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($imovels as $imovel): ?>
	<tr>
		<td><?php echo h($imovel['Imovel']['id']); ?>&nbsp;</td>
		<td><?php echo h($imovel['Imovel']['codigo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($imovel['User']['id'], array('controller' => 'users', 'action' => 'view', $imovel['User']['id'])); ?>
		</td>
		<td><?php echo h($imovel['Imovel']['date_ins']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($imovel['Tipo']['id'], array('controller' => 'tipos', 'action' => 'view', $imovel['Tipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($imovel['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $imovel['Categoria']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($imovel['Contrato']['id'], array('controller' => 'contratos', 'action' => 'view', $imovel['Contrato']['id'])); ?>
		</td>
		<td><?php echo h($imovel['Imovel']['visitas']); ?>&nbsp;</td>
		<td><?php echo h($imovel['Imovel']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $imovel['Imovel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $imovel['Imovel']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $imovel['Imovel']['id']), null, __('Are you sure you want to delete # %s?', $imovel['Imovel']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Imovel'), array('action' => 'add')); ?></li>
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
