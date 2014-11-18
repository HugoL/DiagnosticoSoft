<div class="row-fluid">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'medidasusuario-form',
		'enableAjaxValidation'=>false,
	)); ?>
	<?php foreach ($zonas as $key => $zona): ?>
	<div class="form-horizontal">			
		<?php echo $form->errorSummary($medidas); ?>
		<div class="3">
			<?php echo $form->hiddenField($medidas,'id_usuario',array('value'=>$user->user_id)); ?>
			<?php echo $form->hiddenField($medidas,'id_zona',array('value'=>$zona->id)); ?>
			<div class="control-group">
				<?php echo $form->labelEx($medidas, $zona->nombre,array('class'=>'control-label')); ?>
				<div class="controls"><?php echo $form->textField($medidas,'valor',array('class'=>'span1')); ?></div>
				<?php echo $form->error($medidas,'valor'); ?>
			</div><!-- /control-group -->
		</div>		
	</div>
	<?php endforeach; ?>
	<?php $this->endWidget(); ?>
</div>
<div class="row-fluid"><center>	<?php echo CHtml::submitButton($medidas->isNewRecord ? 'Insertar' : 'Guardar',array('class'=>'btn btn-primary btn-large')); ?></center></div>
<div class="clearfix">&nbsp;</div>