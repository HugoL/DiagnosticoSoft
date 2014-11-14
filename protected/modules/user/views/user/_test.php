<table class="table table-bordered">
	<thead>
	<tr>
		<th class="vert-align"><h3>Test Morfológico</h3></th>
		<th>
			<center><img src="<?php echo Yii::app()->baseUrl ?>/images/sanguinea.jpg" class="img-rounded" alt="Sanguínea"><br/>Sanguínea</center>
		</th>
		<th>
			<center><img src="<?php echo Yii::app()->baseUrl ?>/images/linfatica.jpg" class="img-rounded" alt="Linfática"><br/>Linfática</center>			
		</th>
		<th>
			<center><img src="<?php echo Yii::app()->baseUrl ?>/images/biliosa.jpg" class="img-rounded" alt="Biliosa"><br/>Biliosa</center>
		</th>
		<th>
			<center><img src="<?php echo Yii::app()->baseUrl ?>/images/nerviosa.jpg" class="img-rounded" alt="Nerviosa"><br/>Nerviosa</center>
		</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($model as $key => $test) : ?>
		<tr>
			<th><?php echo CHtml::encode($test->pregunta); ?></th>
			<td>
				<?php echo CHtml::encode($test->respuestasanguinea);  ?>
				<?php echo CHtml::radioButton($test->id, false, array(
    	                             'value'=>'sanguinea',
   	                                 'name'=>'sanguinea_'.$test->id,
    	                             'uncheckValue'=>null
	                             )); ?>
			</td>
			<td><?php echo CHtml::encode($test->respuestalinfatica);  ?>
				<?php echo CHtml::radioButton($test->id, false, array(
    	                             'value'=>'linfatica',
   	                                 'name'=>'linfatica'.$test->id,
    	                             'uncheckValue'=>null
	                             )); ?>
			</td>
			<td><?php echo CHtml::encode($test->respuestabiliosa);  ?>
				<?php echo CHtml::radioButton($test->id, false, array(
    	                             'value'=>'biliosa',
   	                                 'name'=>'biliosa'.$test->id,
    	                             'uncheckValue'=>null
	                             )); ?>
			</td>
			<td><?php echo CHtml::encode($test->respuestanerviosa); ?>
				<?php echo CHtml::radioButton($test->id, false, array(
    	                             'value'=>'nerviosa',
   	                                 'name'=>'nerviosa'.$test->id,
    	                             'uncheckValue'=>null
	                             )); ?></td>
		</tr>
	<?php endforeach; ?>
	<tr>
		<td></td>
		<td>Total: <span id="totalsanguinea"></span></td>
		<td>Total: <span id="totallinfatica"></span></td>
		<td>Total: <span id="totalbiliosa"></span></td>
		<td>Total: <span id="totalnerviosa"></span></td>
	</tr>
	</tbody>
</table>

<div class="row-fluid">
	<?php if( !empty($user->morfologia)): ?>
		Morfología del cliente: <strong><?php echo $user->morfologia; ?></strong>
	<?php else: ?>
		<div class="alert alert-info">No se ha definido una morfolgía para este cliente</div>
	<?php endif; ?>
</div>
<div id="resultado">Morfología calculada: <span id="calculado"></span></div>
<?php $url_action = CHtml::normalizeUrl(array('/user/ajaxCalcularMorfologia')); ?>

<?php Yii::app()->getClientScript()->registerScript("calcularMorfologia",
    "
    $(document).ready(function(){
    	var map = {};
    	var sanguinea = 0;
    	var linfatica = 0;
    	var biliosa = 0;
    	var nerviosa = 0;
    	$('#totalsanguinea').html(sanguinea);
		$('#totallinfatica').html(linfatica);
		$('#totalbiliosa').html(biliosa);
		$('#totalnerviosa').html(nerviosa);

	    $('input:radio').change(function(){
	    	var fila = $(this).attr('id');
			var respuesta = $(this).val();
			
			map[fila] = respuesta;

			console.log(map);

			/*for (fila in map) {
    			switch (map[i]) {
    				case 'sanguinea':
    					++sanguinea;
    					$('#totalsanguinea').html(sanguinea);
    					break;
    				case 'linfatica':
    					++linfatica;
    					$('#totallinfatica').html(linfatica);
    					break;
    				case 'biliosa':
    					++biliosa;
    					$('#totalbiliosa').html(biliosa);
    					break;
    				case 'nerviosa':
    					++nerviosa;
    					$('#totalnerviosa').html(nerviosa);
    					break;
    				default:
  
    					break;
    			}
			}*/
		}); 
	});
    ",CClientScript::POS_LOAD)  ?>