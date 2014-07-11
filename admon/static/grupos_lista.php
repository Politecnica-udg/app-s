<div class="list-group">
	<?php foreach ($arr as $key => $value):?>
			<a href="index.php?tipo=administrativo&accion=a_m_total&cal=<?=$_GET['cal']?>&carr=<?=$_GET['carr']?>&g=<?=$value['gdo_cal']?>&gr=<?=$value['gpo_cal']?>&t=<?=$value['tno_cal']?>" class="list-group-item"><?=$value['gdo_cal']?> <?=$value['gpo_cal']?> <?=$value['tno_cal']?></a>
	<?php endforeach;?>
</div>