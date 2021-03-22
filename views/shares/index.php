<div>
	<?php if(isset($_SESSION['is_loged_in'])): ?>
<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Somthing</a>
	<?php endif; ?>
	<?php foreach($viewmodel as $item): ?>
	<div class="card card-body bg-light">
	<h3><?php echo $item['title'];?></h3>
		<small><?php echo $item['create_date']; ?> </small>
		<hr/>
		<p><?php echo $item['body'];?></p>
	<br/>
	<a class="btn btn-default" href="<?php echo $item['link']; ?>" target="blank">Go To Website</a>
	</div>
	
	<?php endforeach; ?>
	
	
</div>