<div class="list-group">
	<?php foreach ($arr as $key => $value):?>
		<a href="index.php?tipo=administrativo&accion=lista_tec&carr=<?= $value['carrera']?>" class="list-group-item">[<?= $value['carrera']?>]</a>
	<?php endforeach;?>
</div>