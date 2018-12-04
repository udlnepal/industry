<?php echo form_open('newpage/save') ?>
<input type="text" name="name">
<br>
<input type="text" name="email">
<button type="submit">Save</button>
<?php echo form_close(); ?>

<table>
	<tr><td>name</td><td>email</td></tr>
<?php foreach($newpage as $data): ?>
	<tr><td><?php echo $data['name']; ?></td><td><?php echo $data['email'] ?></td></tr>
	<?php endforeach ?>
	</table>