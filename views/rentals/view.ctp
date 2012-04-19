<div class="rentals view">
<h2><?php  __('Rental');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rental['Rental']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Customer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($rental['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $rental['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vehicle'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($rental['Vehicle']['id'], array('controller' => 'vehicles', 'action' => 'view', $rental['Vehicle']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Card'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($rental['Card']['id'], array('controller' => 'cards', 'action' => 'view', $rental['Card']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rental', true), array('action' => 'edit', $rental['Rental']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Rental', true), array('action' => 'delete', $rental['Rental']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rental['Rental']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rentals', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rental', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles', true), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle', true), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards', true), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card', true), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
