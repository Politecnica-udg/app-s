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
	 			<?php if ($value['cin']==0):?> 
	 				<td><span class="label label-danger">[eva0]</span></td>
	 			<?php elseif ($value['cin']==1) :?>
	 				<td><span class="label label-warning">[eva1]</span></td>
	 			<?php else:?>
	 				<td><span class="label label-primary">[eva2]</span></td>
	 			<?php endif;?>
	 			<td><span class="badge pull-right"><?=$value['COUNT(*)']?></span></td>
	 		</tr>
 		<?php endif;?>
 	<?php endforeach;?>
</table>