<div class="list-group">
	<?php foreach ($arr as $key => $value):?>
		<a href="index.php?tipo=administrativo&accion=cali_unico&carr=<?=$_GET['carr']?>&mat=<?=$value['cmod_uni']?>" class="list-group-item"><?=$value['mod_uni']?></a>
	<?php endforeach;?>
</div>