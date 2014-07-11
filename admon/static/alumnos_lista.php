<table class="table table-condensed">
	<tr>
  		<td><strong>Nombre</strong></td>
  		<td><strong>Calificacion</strong></td>
  	</tr>
	<?php foreach ($arr as $key => $value): ?>
		<tr>
  			<td><?= utf8_encode($value['nom_ubi'])?></td>
  			<td><?= $value['num_cal']?></td>
  		</tr>
	<?php endforeach; ?>
</table>
