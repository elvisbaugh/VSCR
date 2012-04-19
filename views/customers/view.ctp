<div class="customers view">
<h2><?php  __('Customer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['address']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['city']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parish'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($customer['Parish']['name'], array('controller' => 'parishes', 'action' => 'view', $customer['Parish']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Postal Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['postal_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Receipt'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['receipt']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created At'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['created_at']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified At'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['modified_at']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer', true), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Customer', true), array('action' => 'delete', $customer['Customer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parishes', true), array('controller' => 'parishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parish', true), array('controller' => 'parishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards', true), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card', true), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rentals', true), array('controller' => 'rentals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rental', true), array('controller' => 'rentals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales', true), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale', true), array('controller' => 'sales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles', true), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle', true), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Cards');?></h3>
	<?php if (!empty($customer['Card'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Card Number'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Verification'); ?></th>
		<th><?php __('Expiration Date'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($customer['Card'] as $card):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $card['id'];?></td>
			<td><?php echo $card['card_number'];?></td>
			<td><?php echo $card['customer_id'];?></td>
			<td><?php echo $card['verification'];?></td>
			<td><?php echo $card['expiration_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'cards', 'action' => 'view', $card['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'cards', 'action' => 'edit', $card['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'cards', 'action' => 'delete', $card['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $card['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Card', true), array('controller' => 'cards', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Rentals');?></h3>
	<?php if (!empty($customer['Rental'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Vehicle Id'); ?></th>
		<th><?php __('Card Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($customer['Rental'] as $rental):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $rental['id'];?></td>
			<td><?php echo $rental['customer_id'];?></td>
			<td><?php echo $rental['vehicle_id'];?></td>
			<td><?php echo $rental['card_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'rentals', 'action' => 'view', $rental['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'rentals', 'action' => 'edit', $rental['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'rentals', 'action' => 'delete', $rental['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rental['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rental', true), array('controller' => 'rentals', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Sales');?></h3>
	<?php if (!empty($customer['Sale'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Vehicle Id'); ?></th>
		<th><?php __('Card Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($customer['Sale'] as $sale):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $sale['id'];?></td>
			<td><?php echo $sale['customer_id'];?></td>
			<td><?php echo $sale['vehicle_id'];?></td>
			<td><?php echo $sale['card_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'sales', 'action' => 'view', $sale['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'sales', 'action' => 'edit', $sale['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'sales', 'action' => 'delete', $sale['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sale['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sale', true), array('controller' => 'sales', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Vehicles');?></h3>
	<?php if (!empty($customer['Vehicle'])):?>
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
		foreach ($customer['Vehicle'] as $vehicle):
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
