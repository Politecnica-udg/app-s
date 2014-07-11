<div class="list-group">
	<?php foreach ($arr as $key => $value):?>
		<a href="index.php?tipo=administrativo&accion=a_m_total&cal=<?=$_GET['cal']?>&carr=<?=$_GET['carr']?>&g=<?=$_GET['g']?>&gr=<?=$_GET['gr']?>&t=<?=$_GET['t']?>&m=<?=$value['asig_cal']?>" class="list-group-item"><?=$value['nom_pes']?></a>
	<?php endforeach;?>
</div>