<div class="policies view">
<h2><?php  __('Policy');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $policy['Policy']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $policy['Policy']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $policy['Policy']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Policy', true), array('action' => 'edit', $policy['Policy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Policy', true), array('action' => 'delete', $policy['Policy']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $policy['Policy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Policies', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Policy', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles', true), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle', true), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Vehicles');?></h3>
	<?php if (!empty($policy['Vehicle'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Vehicle Type'); ?></th>
		<th><?php __('Make'); ?></th>
		<th><?php __('Year Of Vehicle'); ?></th>
		<th><?php __('Transmission'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Policy Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($policy['Vehicle'] as $vehicle):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $vehicle['id'];?></td>
			<td><?php echo $vehicle['customer_id'];?></td>
			<td><?php echo $vehicle['vehicle_type'];?></td>
			<td><?php echo $vehicle['make'];?></td>
			<td><?php echo $vehicle['year_of_vehicle'];?></td>
			<td><?php echo $vehicle['transmission'];?></td>
			<td><?php echo $vehicle['price'];?></td>
			<td><?php echo $vehicle['policy_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'vehicles', 'action' => 'view', $vehicle['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'vehicles', 'action' => 'edit', $vehicle['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'vehicles', 'action' => 'delete', $vehicle['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $vehicle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vehicle', true), array('controller' => 'vehicles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
