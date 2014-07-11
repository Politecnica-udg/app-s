<table class="table">
	<tr>
		<th>[name]</th>
		<th>[status]</th>
		<th>[cant]</th>
 	</tr>
 	<?php foreach ($GLOBALS as $key => $value): ?>
 		<?php if($value['nom_pro'] != ''):?>
	 		<tr>
	 			<td><?=utf8_encode($value['nom_pro'])?></td>
	 				<td><span class="label label-danger">[eva0]</span></td>
	 			<td><span class="badge pull-right"><?=$value['COUNT(*)']?></span></td>
	 		</tr>
	 	<?php endif;?>
 	<?php endforeach;?>
</table>