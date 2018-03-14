<?php $this->extend('header'); ?>
<div style="width: 50%;padding: 20px;">
	<a href="/add" class="button">Add User</a>
	<table>
		<tr>
			<th>#</th>
			<th>Username</th>
			<th>Action</th>
		</tr>
		<?php 
		$count = 1;
		foreach($results as $user):
		?>
			<tr>
				<td><?= $count++; ?></td>
				<td><?= $user->username; ?></td>
				<td>
					<a href="edit/<?= $user->id; ?>">Edit</a>
					<a href="delete/<?= $user->id; ?>">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>