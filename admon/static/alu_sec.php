<blockquote>
	<p><?= $_GET['mn']?></p>
	<p><?= $_GET['gr']." ".$_GET['g']." ".$_GET['t']?></p>
	<p>[<?= $_GET['carr']?>]</p>
</blockquote>
<div class="table-responsive">
<form action="" method="post">
  <table class="table">
  	<tr>
 		<th>[cod]</th>
 		<th>[name]</th>
 		<th>Ordinario</th>
 		<th>Extraordinario</th>
 	</tr>
 	<?php $n=0; foreach ($arr as $key => $value): $n++;?>
		<tr>
			<td><?=$value['cod_cal']?></td>
			<input type="hidden"  name="cod<?=$key?>" value="<?=$value['cod_cal']?>">
			<td><?=utf8_encode($value['nom_ubi'])?></td>
			<td>
				<label class="sr-only" for="Ordinario">Ordinario</label>
				 <input type="ordinario" class="form-control" id="ordinario" name="or<?=$key?>" value="<?=$value['num_cal']?>" onfocus="if(this.value=='<?=$value['num_cal']?>')this.value=''" onkeypress="return justNumbers(event)">
			</td>
			<td>
				<label class="sr-only" for="Extraordinario">Extraordinario</label>
				 <input type="extra" class="form-control" id="extra" name="ex<?=$key?>" value="<?=$value['num_cal2']?>" onfocus="if(this.value=='<?=$value['num_cal2']?>')this.value=''" onkeypress="return justNumbers(event)" >
			</td>
		</tr>
 	<?php endforeach; ?>
  </table>
  	<input type="hidden" name="cantidad" value="<?=$n?>">
	<input type="hidden" name="opcion" value="si">
	<button type="submit" value="si" name="p" class="btn btn-default">[cerrar_enviar]</button>
	</form>
</div>
