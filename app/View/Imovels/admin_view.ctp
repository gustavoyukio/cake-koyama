<div class="imovels view">
<h2><?php echo __('Imovel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imovel['User']['id'], array('controller' => 'users', 'action' => 'view', $imovel['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Ins'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['date_ins']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imovel['Tipo']['id'], array('controller' => 'tipos', 'action' => 'view', $imovel['Tipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imovel['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $imovel['Categoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contrato'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imovel['Contrato']['id'], array('controller' => 'contratos', 'action' => 'view', $imovel['Contrato']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visitas'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['visitas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Imovel'), array('action' => 'edit', $imovel['Imovel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Imovel'), array('action' => 'delete', $imovel['Imovel']['id']), null, __('Are you sure you want to delete # %s?', $imovel['Imovel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Imovels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($imovel['Comentario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Imovel Id'); ?></th>
		<th><?php echo __('Obsimovel'); ?></th>
		<th><?php echo __('Obscontrato'); ?></th>
		<th><?php echo __('Obsdetalhes'); ?></th>
		<th><?php echo __('Obslazer'); ?></th>
		<th><?php echo __('Obscorretor'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($imovel['Comentario'] as $comentario): ?>
		<tr>
			<td><?php echo $comentario['id']; ?></td>
			<td><?php echo $comentario['imovel_id']; ?></td>
			<td><?php echo $comentario['obsimovel']; ?></td>
			<td><?php echo $comentario['obscontrato']; ?></td>
			<td><?php echo $comentario['obsdetalhes']; ?></td>
			<td><?php echo $comentario['obslazer']; ?></td>
			<td><?php echo $comentario['obscorretor']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comentarios', 'action' => 'view', $comentario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), null, __('Are you sure you want to delete # %s?', $comentario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dados'); ?></h3>
	<?php if (!empty($imovel['Dado'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dormitorios'); ?></th>
		<th><?php echo __('Suites'); ?></th>
		<th><?php echo __('Salas'); ?></th>
		<th><?php echo __('Wcs'); ?></th>
		<th><?php echo __('Lavabos'); ?></th>
		<th><?php echo __('Copas'); ?></th>
		<th><?php echo __('Cozinhas'); ?></th>
		<th><?php echo __('Vagas'); ?></th>
		<th><?php echo __('Metros'); ?></th>
		<th><?php echo __('Metrosutil'); ?></th>
		<th><?php echo __('Areaserv'); ?></th>
		<th><?php echo __('Depeserv'); ?></th>
		<th><?php echo __('Imovel Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($imovel['Dado'] as $dado): ?>
		<tr>
			<td><?php echo $dado['id']; ?></td>
			<td><?php echo $dado['dormitorios']; ?></td>
			<td><?php echo $dado['suites']; ?></td>
			<td><?php echo $dado['salas']; ?></td>
			<td><?php echo $dado['wcs']; ?></td>
			<td><?php echo $dado['lavabos']; ?></td>
			<td><?php echo $dado['copas']; ?></td>
			<td><?php echo $dado['cozinhas']; ?></td>
			<td><?php echo $dado['vagas']; ?></td>
			<td><?php echo $dado['metros']; ?></td>
			<td><?php echo $dado['metrosutil']; ?></td>
			<td><?php echo $dado['areaserv']; ?></td>
			<td><?php echo $dado['depeserv']; ?></td>
			<td><?php echo $dado['imovel_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dados', 'action' => 'view', $dado['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dados', 'action' => 'edit', $dado['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dados', 'action' => 'delete', $dado['id']), null, __('Are you sure you want to delete # %s?', $dado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dado'), array('controller' => 'dados', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Destaques'); ?></h3>
	<?php if (!empty($imovel['Destaque'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Imovel Id'); ?></th>
		<th><?php echo __('Destaque Tipo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($imovel['Destaque'] as $destaque): ?>
		<tr>
			<td><?php echo $destaque['id']; ?></td>
			<td><?php echo $destaque['imovel_id']; ?></td>
			<td><?php echo $destaque['destaque_tipo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'destaques', 'action' => 'view', $destaque['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'destaques', 'action' => 'edit', $destaque['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'destaques', 'action' => 'delete', $destaque['id']), null, __('Are you sure you want to delete # %s?', $destaque['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Destaque'), array('controller' => 'destaques', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Detalhes'); ?></h3>
	<?php if (!empty($imovel['Detalhe'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Imovel Id'); ?></th>
		<th><?php echo __('Cidade Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Logradouro'); ?></th>
		<th><?php echo __('Endereco'); ?></th>
		<th><?php echo __('Referencia'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Cep'); ?></th>
		<th><?php echo __('Bairro Id'); ?></th>
		<th><?php echo __('Andar'); ?></th>
		<th><?php echo __('Conjunto'); ?></th>
		<th><?php echo __('Zona Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($imovel['Detalhe'] as $detalhe): ?>
		<tr>
			<td><?php echo $detalhe['id']; ?></td>
			<td><?php echo $detalhe['imovel_id']; ?></td>
			<td><?php echo $detalhe['cidade_id']; ?></td>
			<td><?php echo $detalhe['estado_id']; ?></td>
			<td><?php echo $detalhe['logradouro']; ?></td>
			<td><?php echo $detalhe['endereco']; ?></td>
			<td><?php echo $detalhe['referencia']; ?></td>
			<td><?php echo $detalhe['numero']; ?></td>
			<td><?php echo $detalhe['cep']; ?></td>
			<td><?php echo $detalhe['bairro_id']; ?></td>
			<td><?php echo $detalhe['andar']; ?></td>
			<td><?php echo $detalhe['conjunto']; ?></td>
			<td><?php echo $detalhe['zona_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'detalhes', 'action' => 'view', $detalhe['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'detalhes', 'action' => 'edit', $detalhe['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'detalhes', 'action' => 'delete', $detalhe['id']), null, __('Are you sure you want to delete # %s?', $detalhe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Detalhe'), array('controller' => 'detalhes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Fotos'); ?></h3>
	<?php if (!empty($imovel['Foto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nm Foto'); ?></th>
		<th><?php echo __('Imovel Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($imovel['Foto'] as $foto): ?>
		<tr>
			<td><?php echo $foto['id']; ?></td>
			<td><?php echo $foto['nm_foto']; ?></td>
			<td><?php echo $foto['imovel_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fotos', 'action' => 'view', $foto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fotos', 'action' => 'edit', $foto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fotos', 'action' => 'delete', $foto['id']), null, __('Are you sure you want to delete # %s?', $foto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Foto'), array('controller' => 'fotos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Imovel Proprietarios'); ?></h3>
	<?php if (!empty($imovel['ImovelProprietario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Imovel Id'); ?></th>
		<th><?php echo __('Proprietario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($imovel['ImovelProprietario'] as $imovelProprietario): ?>
		<tr>
			<td><?php echo $imovelProprietario['id']; ?></td>
			<td><?php echo $imovelProprietario['imovel_id']; ?></td>
			<td><?php echo $imovelProprietario['proprietario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'imovel_proprietarios', 'action' => 'view', $imovelProprietario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'imovel_proprietarios', 'action' => 'edit', $imovelProprietario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'imovel_proprietarios', 'action' => 'delete', $imovelProprietario['id']), null, __('Are you sure you want to delete # %s?', $imovelProprietario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Imovel Proprietario'), array('controller' => 'imovel_proprietarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Lazers'); ?></h3>
	<?php if (!empty($imovel['Lazer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Quadra'); ?></th>
		<th><?php echo __('Piscina'); ?></th>
		<th><?php echo __('Playground'); ?></th>
		<th><?php echo __('Salao'); ?></th>
		<th><?php echo __('Salaojogos'); ?></th>
		<th><?php echo __('Churrasqueira'); ?></th>
		<th><?php echo __('Sauna'); ?></th>
		<th><?php echo __('Academia'); ?></th>
		<th><?php echo __('Outros'); ?></th>
		<th><?php echo __('Imovel Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($imovel['Lazer'] as $lazer): ?>
		<tr>
			<td><?php echo $lazer['id']; ?></td>
			<td><?php echo $lazer['quadra']; ?></td>
			<td><?php echo $lazer['piscina']; ?></td>
			<td><?php echo $lazer['playground']; ?></td>
			<td><?php echo $lazer['salao']; ?></td>
			<td><?php echo $lazer['salaojogos']; ?></td>
			<td><?php echo $lazer['churrasqueira']; ?></td>
			<td><?php echo $lazer['sauna']; ?></td>
			<td><?php echo $lazer['academia']; ?></td>
			<td><?php echo $lazer['outros']; ?></td>
			<td><?php echo $lazer['imovel_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lazers', 'action' => 'view', $lazer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lazers', 'action' => 'edit', $lazer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lazers', 'action' => 'delete', $lazer['id']), null, __('Are you sure you want to delete # %s?', $lazer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lazer'), array('controller' => 'lazers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Logs'); ?></h3>
	<?php if (!empty($imovel['Log'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Imovel Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Table'); ?></th>
		<th><?php echo __('Date Ins'); ?></th>
		<th><?php echo __('Campo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($imovel['Log'] as $log): ?>
		<tr>
			<td><?php echo $log['id']; ?></td>
			<td><?php echo $log['imovel_id']; ?></td>
			<td><?php echo $log['user_id']; ?></td>
			<td><?php echo $log['table']; ?></td>
			<td><?php echo $log['date_ins']; ?></td>
			<td><?php echo $log['campo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'logs', 'action' => 'view', $log['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'logs', 'action' => 'edit', $log['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'logs', 'action' => 'delete', $log['id']), null, __('Are you sure you want to delete # %s?', $log['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Observations'); ?></h3>
	<?php if (!empty($imovel['Observation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Obs Imovel'); ?></th>
		<th><?php echo __('Obs Contrato'); ?></th>
		<th><?php echo __('Obs Detalhes'); ?></th>
		<th><?php echo __('Obs Lazer'); ?></th>
		<th><?php echo __('Obs'); ?></th>
		<th><?php echo __('Imovel Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($imovel['Observation'] as $observation): ?>
		<tr>
			<td><?php echo $observation['id']; ?></td>
			<td><?php echo $observation['obs_imovel']; ?></td>
			<td><?php echo $observation['obs_contrato']; ?></td>
			<td><?php echo $observation['obs_detalhes']; ?></td>
			<td><?php echo $observation['obs_lazer']; ?></td>
			<td><?php echo $observation['obs']; ?></td>
			<td><?php echo $observation['imovel_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'observations', 'action' => 'view', $observation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'observations', 'action' => 'edit', $observation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'observations', 'action' => 'delete', $observation['id']), null, __('Are you sure you want to delete # %s?', $observation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Observation'), array('controller' => 'observations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Placas'); ?></h3>
	<?php if (!empty($imovel['Placa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Placa'); ?></th>
		<th><?php echo __('Imovel Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($imovel['Placa'] as $placa): ?>
		<tr>
			<td><?php echo $placa['id']; ?></td>
			<td><?php echo $placa['placa']; ?></td>
			<td><?php echo $placa['imovel_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'placas', 'action' => 'view', $placa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'placas', 'action' => 'edit', $placa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'placas', 'action' => 'delete', $placa['id']), null, __('Are you sure you want to delete # %s?', $placa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Placa'), array('controller' => 'placas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Valores'); ?></h3>
	<?php if (!empty($imovel['Valore'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Iptu'); ?></th>
		<th><?php echo __('Condominio'); ?></th>
		<th><?php echo __('Taxas'); ?></th>
		<th><?php echo __('Mensais'); ?></th>
		<th><?php echo __('Imovel Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($imovel['Valore'] as $valore): ?>
		<tr>
			<td><?php echo $valore['id']; ?></td>
			<td><?php echo $valore['valor']; ?></td>
			<td><?php echo $valore['iptu']; ?></td>
			<td><?php echo $valore['condominio']; ?></td>
			<td><?php echo $valore['taxas']; ?></td>
			<td><?php echo $valore['mensais']; ?></td>
			<td><?php echo $valore['imovel_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'valores', 'action' => 'view', $valore['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'valores', 'action' => 'edit', $valore['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'valores', 'action' => 'delete', $valore['id']), null, __('Are you sure you want to delete # %s?', $valore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Valore'), array('controller' => 'valores', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
