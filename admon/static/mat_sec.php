<blockquote>
	<p><?= $_GET['gr']." ".$_GET['g']." ".$_GET['t']?></p>
	<p>[<?= $_GET['carr']?>]</p>
</blockquote>
<div class="list-group">
	<?php foreach ($arr as $key => $value):?>
		<a href="index.php?tipo=administrativo&accion=lista_tec&carr=<?= $_GET['carr']?>&gr=<?= $_GET['gr']?>&g=<?= $_GET['g']?>&t=<?= $_GET['t']?>&m=<?= $value['casg_prof']?>&mn=<?= $value['nom_pes']?>" class="list-group-item"><?= $value['nom_pes']?>
		<?php if ($value['sec'] == 0 ):?>
			<span class="label label-warning">[!revisado]</span>
			<?php else:?>
				<span class="label label-primary">[revisado]</span>
		<?php endif;?>
		</a>
	<?php endforeach;?>
</div>