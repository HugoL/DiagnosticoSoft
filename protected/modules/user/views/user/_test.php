<div class="row-fluid">
	<?php if( !empty($user->morfologia)): ?>
		<h5><p>Morfología del cliente: <span class="label label-warning"><?php echo $user->morfologia; ?></span></p></h5>
	<?php else: ?>
		<div class="alert alert-info">No se ha definido una morfolgía para este cliente</div>
	<?php endif; ?>
	<p><small>Para ver características de cada morfología, pinchar en el nombre de la morfología</small></p>
</div>
<table class="table table-bordered">
	<thead>
	<tr>
		<th class="vert-align"><h3>Test Morfológico</h3></th>
		<th>
			<center><img src="<?php echo Yii::app()->baseUrl ?>/images/linfatica.jpg" class="img-rounded" alt="Linfática"><br/><a href="#modalLinfatica" role="button" class="btn" data-toggle="modal">Linfática</a></center>			
		</th>
		<th>
			<center><img src="<?php echo Yii::app()->baseUrl ?>/images/sanguinea.jpg" class="img-rounded" alt="Sanguínea"><br/><a href="#modalSanguinea" role="button" class="btn" data-toggle="modal">Sanguínea</a></center>
		</th>		
		<th>
			<center><img src="<?php echo Yii::app()->baseUrl ?>/images/biliosa.jpg" class="img-rounded" alt="Biliosa"><br/><a href="#modalBiliosa" role="button" class="btn" data-toggle="modal">Biliosa</a></center>
		</th>
		<th>
			<center><img src="<?php echo Yii::app()->baseUrl ?>/images/nerviosa.jpg" class="img-rounded" alt="Nerviosa"><br/><a href="#modalNerviosa" role="button" class="btn" data-toggle="modal">Nerviosa</a></center>
		</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($model as $key => $test) : ?>
		<tr>
			<th><?php echo CHtml::encode($test->pregunta); ?></th>			
			<td><?php echo CHtml::encode($test->respuestalinfatica);  ?>
				<?php echo CHtml::radioButton($test->id, false, array(
    	                             'value'=>'linfatica',
   	                                 'name'=>'linfatica'.$test->id,
    	                             'uncheckValue'=>null
	                             )); ?>
			</td>
			<td>
				<?php echo CHtml::encode($test->respuestasanguinea);  ?>
				<?php echo CHtml::radioButton($test->id, false, array(
    	                             'value'=>'sanguinea',
   	                                 'name'=>'sanguinea_'.$test->id,
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
		<td>Total: <span class="badge badge-success" id="totallinfatica"></span></td>
		<td>Total: <span class="badge badge-warning" id="totalsanguinea"></span></td>
		<td>Total: <span class="badge badge-info" id="totalbiliosa"></span></td>
		<td>Total: <span class="badge badge-important" id="totalnerviosa"></span></td>
	</tr>
	</tbody>
</table>
<div id="resultado" class="alert alert-warning"><center><h3>Morfología calculada:  <span id="calculado">No especificada</span></center></h3></div>
<div class="clearfix">&nbsp;</div>
<!-- Modals -->
			<div id="modalLinfatica" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Linfática</h3>
			</div>
			<div class="modal-body">
			<p><?php foreach ($morfologias as $key => $morfologia) :
				if( strcmp($morfologia->nombre,"Linfática") == 0 ): ?>
					<div><?php echo $morfologia->caracteristicas; ?></div>
				<?php endif;
			endforeach ?></p>
			</div>
			<div class="modal-footer">
			<button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Cerrar</button>
			</div>
			</div>

			<div id="modalSanguinea" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Sanguínea</h3>
			</div>
			<div class="modal-body">
			<p><?php foreach ($morfologias as $key => $morfologia) :
				if( strcmp($morfologia->nombre,"Sanguínea") == 0 ): ?>
					<div><?php echo $morfologia->caracteristicas; ?></div>
				<?php endif;
			endforeach ?></p>
			</div>
			<div class="modal-footer">
			<button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Cerrar</button>
			</div>
			</div>

			<div id="modalBiliosa" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Biliosa</h3>
			</div>
			<div class="modal-body">
			<p><?php foreach ($morfologias as $key => $morfologia) :
				if( strcmp($morfologia->nombre,"Biliosa") == 0 ): ?>
					<div><?php echo $morfologia->caracteristicas; ?></div>
				<?php endif;
			endforeach ?></p>
			</div>
			<div class="modal-footer">
			<button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Cerrar</button>
			</div>
			</div>

			<div id="modalNerviosa" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Nerviosa</h3>
			</div>
			<div class="modal-body">
			<p><?php foreach ($morfologias as $key => $morfologia) :
				if( strcmp($morfologia->nombre,"Nerviosa") == 0 ): ?>
					<div><?php echo $morfologia->caracteristicas; ?></div>
				<?php endif;
			endforeach ?></p>
			</div>
			<div class="modal-footer">
			<button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Cerrar</button>
			</div>
			</div>

<div class="row-fluid">
	<div class="well well-small">
	<?php $form=$this->beginWidget('CActiveForm', array(
							'id'=>'profile-form',
							// Please note: When you enable ajax validation, make sure the corresponding
							// controller action is handling ajax validation correctly.
							// There is a call to performAjaxValidation() commented in generated controller code.
							// See class documentation of CActiveForm for details on this.
							'enableAjaxValidation'=>false,
						)); ?>
						<?php echo $form->labelEx($user,'morfologia'); ?>
						<?php echo $form->dropDownList($user,'morfologia',User::itemAlias('Morfologia')); ?>

						<?php echo $form->error($user,'morfologia'); ?>
						<?php echo CHtml::submitButton('Guardar', array('class' => 'btn btn-info btn-large')); ?>
	<?php $this->endWidget(); ?>
</div>
</div>
<?php $url_action = CHtml::normalizeUrl(array('/user/ajaxCalcularMorfologia')); ?>

<?php Yii::app()->getClientScript()->registerScript("calcularMorfologia",
    "
    $(document).ready(function(){
    	var sanguinea = 0;
    	var linfatica = 0;
    	var biliosa = 0;
    	var nerviosa = 0;
    	var gordito = '';
    	var delgadito = '';
    	$('#totalsanguinea').html(sanguinea);
		$('#totallinfatica').html(linfatica);
		$('#totalbiliosa').html(biliosa);
		$('#totalnerviosa').html(nerviosa);

	    $('input:radio').change(function(){
	    	var sanguinea = 0;
    		var linfatica = 0;
    		var biliosa = 0;
    		var nerviosa = 0;
	    	var fila = $(this).attr('id');
			var respuesta = $(this).val();			

			var radios = $('input:radio:checked').val();

			//console.log(radios);

			$('input:checked').each(function () {
        		switch ( $(this).val() ) {
    				case 'sanguinea':
    					++sanguinea;    					
    					break;
    				case 'linfatica':
    					++linfatica;    					
    					break;
    				case 'biliosa':
    					++biliosa;    					
    					break;
    				case 'nerviosa':
    					++nerviosa;    					
    					break;
    				default:
  
    					break;
    			}
    		});
			$('#totalsanguinea').html(sanguinea);
			$('#totallinfatica').html(linfatica);
			$('#totalbiliosa').html(biliosa);
			$('#totalnerviosa').html(nerviosa);

			var mayor = Math.max(sanguinea, linfatica, biliosa, nerviosa);

			if( mayor == sanguinea )
				$('#calculado').html('Sanguínea');
			if( mayor == linfatica )
				$('#calculado').html('Linfática');
			if( mayor == biliosa )
				$('#calculado').html('Biliosa');
			if( mayor == nerviosa )
				$('#calculado').html('Nerviosa');
		}); 
	});
    ",CClientScript::POS_LOAD)  ?>