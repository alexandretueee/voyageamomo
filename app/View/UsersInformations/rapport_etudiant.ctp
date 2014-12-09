<div class="usersInformations view">
<h2><?php echo __('Users Information'); ?></h2>
	<dl>
		
		<dt><?php echo __('Numero Da'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['numero_da']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nationalité'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['pays_id']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Programme'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersInformation['Programme']['id'], array('controller' => 'programmes', 'action' => 'view', $usersInformation['Programme']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Voyage'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersInformation['Voyage']['id'], array('controller' => 'voyages', 'action' => 'view', $usersInformation['Voyage']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date De Naissance'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['date_de_naissance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Passeport'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['numero_passeport']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date De Delivrance'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['date_de_delivrance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Expiration'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['date_expiration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adresse'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['adresse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ville'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['ville']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code Postal'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['code_postal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cellulaire'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['cellulaire']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Courriel'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['courriel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Session'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['session']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cours Espagnol'); ?></dt>
		<dd><td><?php if($usersInformation['UsersInformation']['cours_espagnol'] == 1 ){
		echo "oui" ;
		}else{  
		echo "non "; } ?>&nbsp;</td>
		</dd>
		<dt><?php echo __('Espagnol Precise'); ?></dt>
		<dd>
			<?php echo h($usersInformation['UsersInformation']['cours_espagnol_precise']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paiement'); ?></dt>
		<dd>
		<td><?php if($usersInformation['UsersInformation']['paiement'] == 1 ){
		echo "payé" ;
		}else{  
		echo "non payé"; } ?>&nbsp;</td>
			
		</dd>
	</dl>
</div>
