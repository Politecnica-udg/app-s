<div class="container">
	<div class="text-center" id="lis_grup">[lis_grup]</div>
	<div class="row">
  		<div class="col-md-9 col-md-push-3"><p class="text_ls">[name]: <?= utf8_encode($_SESSION['nombre'])?></p></div>
 		 <div class="col-md-3 col-md-pull-9"><p class="text_ls">[cod]: <?= $_SESSION['codigo']?></p></div>
	</div>
	<pre>[ins_ci]</pre>
	<table class="table table-striped" id="califiacion">
 		<tr>
 			<th>[carrera]</th>
 			<th>[Gdo]</th>
 			<th>[Grupo]</th>
 			<th>[Asignatura]</th>
 			<th>[lista]</th>
 			<th>[imprimir]</th>
 		</tr>
 		<?php foreach ($GLOBALS as $key => $value): ?>
 			<tr>
 				<td><?=$value['abr_car']?></td>
 				<td><?=$value['gdo_prof']?></td>
 				<td><?=$value['gpo_prof']?></td>
 				<td><?=$value['nom_pes']?></td>
 				<td><span class="label label-primary">[revisado]</span></td>
 				<td><a href="index.php?tipo=pdf&m=<?=$value['casg_prof']?>&c=<?=$value['ccar_prof']?>&g=<?=$value['gdo_prof']?>&gr=<?=$value['gpo_prof']?>&t=<?=$value['tur_prof']?>"><span class="glyphicon glyphicon-print"></span></a></td>
 				
 				<!--<?php if ($value['cin'] == "2"):?>
 					<td><span class="label label-primary">[revisado]</span></td>
 					<td><a href="index.php?tipo=pdf&m=<?=$value['casg_prof']?>&c=<?=$value['ccar_prof']?>&g=<?=$value['gdo_prof']?>&gr=<?=$value['gpo_prof']?>&t=<?=$value['tur_prof']?>"><span class="glyphicon glyphicon-print"></span></a></td>
 				<?php elseif($value['cin'] == "1"):?>
 					<td><a href="index.php?tipo=maestro&m=<?=$value['casg_prof']?>&c=<?=$value['ccar_prof']?>&g=<?=$value['gdo_prof']?>&gr=<?=$value['gpo_prof']?>"><span class="glyphicon glyphicon-list-alt"></span><span class="label label-success">[enpro]</span></a></td>
 					<td><span class="glyphicon glyphicon-print"></span></td>
 					<?php else:?>
 						<td><a href="index.php?tipo=maestro&m=<?=$value['casg_prof']?>&c=<?=$value['ccar_prof']?>&g=<?=$value['gdo_prof']?>&gr=<?=$value['gpo_prof']?>"><span class="glyphicon glyphicon-list-alt"></span><span class="label label-warning">[!revisado]</span></a></td>
 						<td><span class="glyphicon glyphicon-print"></span></td>
 				<?php endif;?>-->
 			</tr>
 		<?php endforeach; ?>
	</table>
</div>