<ul>
<?php foreach($menu_items as $key=>$data): ?>
<li>
<?php	for($i=0, $ni=count($menu_items); $i< $ni; $i++){ ?>
<?php if($menu_items[$i]['parent_id']==$data['parent_id']){?>	
<?php echo $data['name']; ?>
<?php } ?>
<?php }?>
</li>
<?php endforeach; ?>
</ul>