	<div class="container">
	<div class="content" style="background:#666!important;">
		<div class="row">
		<div class="col-lg-6">
		<div class="" style="padding:20px;">

<?php echo form_open(); ?>
<div class="input-group">
	<span class="input-group-addon bg-info text-white" style="padding:10px;">Menu Title</span>
<input type="text" class="form-control" name="name">
</div>
<div class="input-group" style="margin-top:5px;">
	<span class="input-group-addon bg-info text-white" style="padding:10px;">Parent Menu</span>
<select class="form-control" width="100%;" style="height:calc(2.0625rem + 8px);">
	<option>Select</option>
<?php foreach($menu_setup as $key=>$data): ?>
	<option value="<?php echo $data['id'] ?>"><?php echo $data['name'] ?></option>
<?php endforeach; ?>
</select>
</div>
<div class="input-group" style="margin-top:5px;">
	<span class="input-group-addon bg-info text-white" style="padding:10px;">Sequence</span>
<select class="form-control" width="100%;" style="height:calc(2.0625rem + 8px);">
	<option>Select</option>
</select>
</div>

<?php echo form_close(); ?>

		</div>
		</div>
		</div>
	</div>
</div>
<style>


</style>