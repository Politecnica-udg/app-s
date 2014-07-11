<div class="list-group">  
	<?php foreach ($arr as $key => $value):?>
		<a href="index.php?tipo=administrativo&accion=a_m_total&cal=<?=$_GET['cal']?>&carr=<?=$value['carr_cal']?>" class="list-group-item"><?=$value['nom_car']?></a>
	<?php endforeach;?>
</div>