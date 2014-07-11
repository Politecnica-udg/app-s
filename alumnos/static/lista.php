<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><?=utf8_encode($_SESSION['nombre'])?></div>
  <div class="panel-body">
    <p>[alum_e]</p>
  </div>
  <!-- Table -->
  <table class="table">
    
  	<tr>
		<th>[materia]</th>
		<th>[status]</th>
 	</tr>
 	<?php foreach ($GLOBALS as $key => $value): ?>
 		<?php if ($value['evaluar']==0):?> 
 			<tr>
 				<td><?=utf8_encode($value['nom_pes'])."  de ".$value['gdo_cal']." semestre"?></td>
 				<td><a href="index.php?tipo=alumno&accion=evaluar&a=<?=$value['carr_cal']?>&b=<?=$value['gdo_cal']?>&c=<?=$value['gpo_cal']?>&d=<?=$value['asig_cal']?>" class="list-group-item"><span class="label label-danger">[eva0]</span></a></td>	
 			</tr>
 		<?php else:?>
            <tr> 
 			<td><?=utf8_encode($value['nom_pes'])?></td>
 			<td><span class="label label-primary">[eva2]</span></td>
            </tr>
 		<?php endif;?>
 	<?php endforeach;?>

  </table>
</div>
