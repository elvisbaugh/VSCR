<div class="vehicles form">
<?php echo $this->Form->create('Vehicle');?>
	<fieldset>
		<legend><?php __('Add Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('customer_id');
		echo $this->Form->input('vehicle_type');
		echo $this->Form->input('make');
		echo $this->Form->input('year_of_vehicle');
		echo $this->Form->input('transmission');
		echo $this->Form->input('price');
		echo $this->Form->input('policy_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vehicles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Policies', true), array('controller' => 'policies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Policy', true), array('controller' => 'policies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rentals', true), array('controller' => 'rentals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rental', true), array('controller' => 'rentals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales', true), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale', true), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>