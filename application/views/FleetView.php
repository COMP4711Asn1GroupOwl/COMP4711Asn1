<div class="row">
	<table>
		<?php foreach($data as $airplaneObj): ?>
				<ul>
					<a href="/FleetController/show/{key}"><?php echo $airplaneObj->id; ?></a>
				</ul>
		<?php endforeach; ?>
	</table>
</div>