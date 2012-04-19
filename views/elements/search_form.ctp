<?php 
	echo $this->Form->create(null, array('type' => 'get', 'action' => 'index'));
		echo $this->Form->input('vehicle_type');
		echo $this->Form->input('make');
		echo $this->Form->input('year_of_vehicle');
		echo $this->Form->input('transmission');
		
	echo $this->Form->end('Submit');
?>


