<div class="list-group">  
	<?php foreach ($arr as $key => $value): ?>
		<a href="index.php?tipo=administrativo&accion=<?=$value?>" class="list-group-item">[<?=$value?>]</a>
	<?php endforeach; ?>
</div>
