<?php $this->extend('header'); ?>
<div style="width: 30%;padding: 20px;">
	<?php
		echo $this->Form->create('Users',array('url'=>'/edit/'.$id));
		echo $this->Form->input('username',['value'=>$username]);
		echo $this->Form->input('password',array('label'=>'Old Password','name'=>'old_password','id'=>'old_password'));
		echo $this->Form->input('password',array('label'=>'New Password','name'=>'new_password','id'=>'new_password'));
		echo $this->Form->button('Edit');
		echo $this->Form->end();
	?>
</div>