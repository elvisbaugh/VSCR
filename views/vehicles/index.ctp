<div class="vehicles index">
	<h2><?php __('Vehicles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('customer_id');?></th>
			<th><?php echo $this->Paginator->sort('vehicle_type');?></th>
			<th><?php echo $this->Paginator->sort('make');?></th>
			<th><?php echo $this->Paginator->sort('year_of_vehicle');?></th>
			<th><?php echo $this->Paginator->sort('transmission');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th><?php echo $this->Paginator->sort('policy_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($vehicles as $vehicle):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $vehicle['Vehicle']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vehicle['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $vehicle['Customer']['id'])); ?>
		</td>
		<td><?php echo $vehicle['Vehicle']['vehicle_type']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['make']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['year_of_vehicle']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['transmission']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['price']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vehicle['Policy']['name'], array('controller' => 'policies', 'action' => 'view', $vehicle['Policy']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $vehicle['Vehicle']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $vehicle['Vehicle']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Vehicle', true), array('action' => 'add')); ?></li>
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