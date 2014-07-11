<div class="list-group">
	<?php foreach ($arr as $key => $value):?>
		<a href="index.php?tipo=administrativo&accion=cali_unico&carr=<?=$value['ccar_uni']?>" class="list-group-item"><?=$value['carr_uni']?></a>
	<?php endforeach;?>
</div>