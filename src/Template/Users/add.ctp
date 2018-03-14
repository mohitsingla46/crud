<?php $this->extend('header'); ?>
<div style="width: 30%;padding: 20px;">
	<?php
		echo $this->Form->create('Users',array('url'=>'/add'));
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->button('Add');
		echo $this->Form->end();
	?>
</div>