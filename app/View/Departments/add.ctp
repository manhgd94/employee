<div class="departments form">
<?php echo $this->Form->create('Department'); ?>
	<fieldset>
		<legend><?php echo __('Add Department'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('office_phone');
		echo $this->Form->input('manager');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Departments'), array('action' => 'index')); ?></li>
	</ul>
</div>
