<div class="voyages rapport">
	<h2><?php echo __('Voyages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('voyage'); ?></th>
			<th><?php echo $this->Paginator->sort('date_depart'); ?></th>
			<th><?php echo $this->Paginator->sort('date_retour'); ?></th>
			<th><?php echo $this->Paginator->sort('prix'); ?></th>
			
	
	</thead>
	<tbody>
	<?php foreach ($voyages as $voyage): ?>
	
		<td><?php echo h($voyage['Voyage']['id']); ?>&nbsp;</td>
		<td><?php echo h($voyage['Voyage']['voyage']); ?>&nbsp;</td>
		<td><?php echo h($voyage['Voyage']['date_depart']); ?>&nbsp;</td>
		<td><?php echo h($voyage['Voyage']['date_retour']); ?>&nbsp;</td>
		<td><?php echo h($voyage['Voyage']['prix']); ?>&nbsp;</td>
		<tr>
	
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
