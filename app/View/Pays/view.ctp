<div class="pays view">
<h2><?php echo __('Pay'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pay['Pay']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pays'); ?></dt>
		<dd>
			<?php echo h($pay['Pay']['pays']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pays'), array('action' => 'edit', $pay['Pay']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pays'), array('action' => 'delete', $pay['Pay']['id']), array(), __('Are you sure you want to delete # %s?', $pay['Pay']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pays'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pays'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Informations'), array('controller' => 'users_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Information'), array('controller' => 'users_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users Informations'); ?></h3>
	<?php if (!empty($pay['UsersInformation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Numero Da'); ?></th>
		<th><?php echo __('Pays Id'); ?></th>
		<th><?php echo __('Programme Id'); ?></th>
		<th><?php echo __('Voyage Id'); ?></th>
		<th><?php echo __('Prenom'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Date De Naissance'); ?></th>
		<th><?php echo __('Numero Passeport'); ?></th>
		<th><?php echo __('Date De Delivrance'); ?></th>
		<th><?php echo __('Date Expiration'); ?></th>
		<th><?php echo __('Adresse'); ?></th>
		<th><?php echo __('Ville'); ?></th>
		<th><?php echo __('Code Postal'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Cellulaire'); ?></th>
		<th><?php echo __('Courriel'); ?></th>
		<th><?php echo __('Session'); ?></th>
		<th><?php echo __('Cours Espagnol'); ?></th>
		<th><?php echo __('Cours Espagnol Precise'); ?></th>
		<th><?php echo __('Paiement'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pay['UsersInformation'] as $usersInformation): ?>
		<tr>
			<td><?php echo $usersInformation['id']; ?></td>
			<td><?php echo $usersInformation['numero_da']; ?></td>
			<td><?php echo $usersInformation['pays_id']; ?></td>
			<td><?php echo $usersInformation['programme_id']; ?></td>
			<td><?php echo $usersInformation['voyage_id']; ?></td>
			<td><?php echo $usersInformation['prenom']; ?></td>
			<td><?php echo $usersInformation['nom']; ?></td>
			<td><?php echo $usersInformation['date_de_naissance']; ?></td>
			<td><?php echo $usersInformation['numero_passeport']; ?></td>
			<td><?php echo $usersInformation['date_de_delivrance']; ?></td>
			<td><?php echo $usersInformation['date_expiration']; ?></td>
			<td><?php echo $usersInformation['adresse']; ?></td>
			<td><?php echo $usersInformation['ville']; ?></td>
			<td><?php echo $usersInformation['code_postal']; ?></td>
			<td><?php echo $usersInformation['telephone']; ?></td>
			<td><?php echo $usersInformation['cellulaire']; ?></td>
			<td><?php echo $usersInformation['courriel']; ?></td>
			<td><?php echo $usersInformation['session']; ?></td>
			<td><?php echo $usersInformation['cours_espagnol']; ?></td>
			<td><?php echo $usersInformation['cours_espagnol_precise']; ?></td>
			<td><?php echo $usersInformation['paiement']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users_informations', 'action' => 'view', $usersInformation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users_informations', 'action' => 'edit', $usersInformation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users_informations', 'action' => 'delete', $usersInformation['id']), array(), __('Are you sure you want to delete # %s?', $usersInformation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Users Information'), array('controller' => 'users_informations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
