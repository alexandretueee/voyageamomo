<div class="usersInformations form">
<?php echo $this->Form->create('UsersInformation'); ?>
	<fieldset>
		<legend><?php echo __('Add Users Information'); ?></legend>
	<?php
		echo $this->Form->input('numero_da');
		echo $this->Form->input('pay_id');
		echo $this->Form->input('programme_id');
		echo $this->Form->input('voyage_id');
		echo $this->Form->input('prenom');
		echo $this->Form->input('nom');
		echo $this->Form->input('date_de_naissance');
		echo $this->Form->input('numero_passeport');
		echo $this->Form->input('date_de_delivrance');
		echo $this->Form->input('date_expiration');
		echo $this->Form->input('adresse');
		echo $this->Form->input('ville');
		echo $this->Form->input('code_postal');
		echo $this->Form->input('telephone');
		echo $this->Form->input('cellulaire');
		echo $this->Form->input('courriel');
		echo $this->Form->input('session');
		echo $this->Form->input('cours_espagnol');
		echo $this->Form->input('cours_espagnol_precise');
                ?>
                                      
                                            <div class="form-group">
                                                <?php
                                         $rand = rand(0,999);
                                         if ($rand<10){
                                             $rand = "00"+$rand;
                                         }else if ($rand<100){
                                             $rand = "0"+$rand;
                                         }
					 
					 echo "Veuillez entrer ce chiffre : $rand ";
					?>
                                                <input type="text" name="random" value="$rand" required="required"> 
                                                 
					</div><!-- .form-group -->
                                        <?php
                                        
                                        
                $guid = com_create_guid();
                echo $guid;
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users Informations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pays'), array('controller' => 'pays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pays'), array('controller' => 'pays', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programmes'), array('controller' => 'programmes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programme'), array('controller' => 'programmes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Voyages'), array('controller' => 'voyages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Voyage'), array('controller' => 'voyages', 'action' => 'add')); ?> </li>
	</ul>
</div>
