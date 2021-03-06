<div class="rentals index">
	<h2><?php __('Rentals');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('customer_id');?></th>
			<th><?php echo $this->Paginator->sort('vehicle_id');?></th>
			<th><?php echo $this->Paginator->sort('card_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($rentals as $rental):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $rental['Rental']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rental['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $rental['Customer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rental['Vehicle']['id'], array('controller' => 'vehicles', 'action' => 'view', $rental['Vehicle']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rental['Card']['id'], array('controller' => 'cards', 'action' => 'view', $rental['Card']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $rental['Rental']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $rental['Rental']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $rental['Rental']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rental['Rental']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Rental', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles', true), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle', true), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards', true), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card', true), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>