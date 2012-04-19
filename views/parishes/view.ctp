<div class="parishes view">
<h2><?php  __('Parish');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $parish['Parish']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $parish['Parish']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Parish', true), array('action' => 'edit', $parish['Parish']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Parish', true), array('action' => 'delete', $parish['Parish']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $parish['Parish']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Parishes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parish', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Customers');?></h3>
	<?php if (!empty($parish['Customer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('City'); ?></th>
		<th><?php __('Parish Id'); ?></th>
		<th><?php __('Postal Code'); ?></th>
		<th><?php __('Receipt'); ?></th>
		<th><?php __('Created At'); ?></th>
		<th><?php __('Modified At'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($parish['Customer'] as $customer):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $customer['id'];?></td>
			<td><?php echo $customer['first_name'];?></td>
			<td><?php echo $customer['last_name'];?></td>
			<td><?php echo $customer['address'];?></td>
			<td><?php echo $customer['city'];?></td>
			<td><?php echo $customer['parish_id'];?></td>
			<td><?php echo $customer['postal_code'];?></td>
			<td><?php echo $customer['receipt'];?></td>
			<td><?php echo $customer['created_at'];?></td>
			<td><?php echo $customer['modified_at'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'customers', 'action' => 'view', $customer['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'customers', 'action' => 'edit', $customer['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'customers', 'action' => 'delete', $customer['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
