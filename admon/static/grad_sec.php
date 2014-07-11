<blockquote>
  <p>[<?= $_GET['carr']?>]</p>
</blockquote>
<div class="list-group">
	<?php foreach ($arr as $key => $value):?>
		<?php if ($value['gpo_cal'] != 'R'):?>
			<a href="index.php?tipo=administrativo&accion=lista_tec&carr=<?= $_GET['carr']?>&gr=<?= $value['gdo_cal']?>&g=<?= $value['gpo_cal']?>&t=<?= $value['tno_cal']?>" class="list-group-item"><?= $value['gdo_cal']?> <?= $value['gpo_cal']?> <?= $value['tno_cal']?></a>
		<?php endif;?>
	<?php endforeach;?>
</div>