<div class="usersInformations rapport">
	<h2><?php echo __('Users Informations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
	<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_da'); ?></th>
			<th><?php echo $this->Paginator->sort('voyage_id'); ?></th>
			<th><?php echo $this->Paginator->sort('prenom'); ?></th>
			<th><?php echo $this->Paginator->sort('nom'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_passeport'); ?></th>
			<th><?php echo $this->Paginator->sort('adresse'); ?></th>
			</tr>
			<tbody>
	<?php foreach ($usersInformations as $usersInformation): ?>
	<tr>		<td><?php echo h($usersInformation['UsersInformation']['id']); ?>&nbsp;</td>

		<td><?php echo h($usersInformation['UsersInformation']['numero_da']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($usersInformation['Voyage']['id'], array('controller' => 'voyages', 'action' => 'view', $usersInformation['Voyage']['id'])); ?></td>
		<td><?php echo h($usersInformation['UsersInformation']['prenom']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['nom']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['numero_passeport']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['adresse']); ?>&nbsp;</td>
		</tr>
		</tr>
<?php endforeach; ?>
	</tbody>
			<tr>	<th><?php echo $this->Paginator->sort('id'); ?></th>

			<th><?php echo $this->Paginator->sort('ville'); ?></th>
			<th><?php echo $this->Paginator->sort('code_postal'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('cellulaire'); ?></th>
			<th><?php echo $this->Paginator->sort('courriel'); ?></th>
			<th><?php echo $this->Paginator->sort('paiement'); ?></th>
	</tr>
	</thead>
	
	<tbody>
	<?php foreach ($usersInformations as $usersInformation): ?>
	<tr>
		<tr><td><?php echo h($usersInformation['UsersInformation']['id']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['ville']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['code_postal']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['cellulaire']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['courriel']); ?>&nbsp;</td>
		<td><?php if($usersInformation['UsersInformation']['paiement'] == 1 ){
		echo "payé" ;
		}else{  
		echo "non payé"; } ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</tbody>
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

