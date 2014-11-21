<div class="row-fluid">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'medidasusuario-form',
		'enableAjaxValidation'=>false,
	)); ?>
	<div class="form-horizontal">
		<?php $i = 1; ?>
	<h4>Medidas circulares</h4>
	<div class="row-fluid">
	<?php foreach ($zonas as $key => $zona): ?>
		<?php if( $zona->tipo == 0): ?>		
			<?php echo $form->errorSummary($medidas); ?>
			<?php if( $i == 1): ?>
				<div class="row-fluid">
			<?php endif; ?>
			<div class="span3">
				<?php echo $form->hiddenField($medidas,'['.$key.']id_usuario',array('value'=>$user->user_id)); ?>
				<?php echo $form->hiddenField($medidas,'['.$key.']id_zona',array('value'=>$zona->id)); ?>
				<div class="control-group">
					<?php echo $form->labelEx($medidas, $zona->nombre,array('class'=>'control-label')); ?>
					<div class="controls"><div class="input-append"><?php echo $form->textField($medidas,'['.$key.']valor',array('class' => 'input-small')); ?><span class="add-on"> cm.</span></div></div>
					<?php echo $form->error($medidas,'[$key]valor'); ?>
				</div><!-- /control-group -->
			</div>		
			<?php if( $i == 4 ): ?>
				<?php $i = 1; ?>
				</div>				
			<?php endif; ?>		
		<?php endif; ?>
	<?php endforeach; ?>
	</div>
	<div class="row-fluid">
	<?php $i = 1; ?>
	<h4>Medidas de grasa</h4>
	<?php foreach ($zonas as $key => $zona): ?>
		<?php if( $zona->tipo == 1): ?>		
			<?php echo $form->errorSummary($medidas); ?>
			<?php if( $i == 1 ): ?>
				<div class="row-fluid">
			<?php endif; ?>
			<div class="span3">
				<?php echo $form->hiddenField($medidas,'['.$key.']id_usuario',array('value'=>$user->user_id)); ?>
				<?php echo $form->hiddenField($medidas,'['.$key.']id_zona',array('value'=>$zona->id)); ?>
				<div class="control-group">
					<?php echo $form->labelEx($medidas, $zona->nombre,array('class'=>'control-label')); ?>
					<div class="controls"><div class="input-append"><?php echo $form->textField($medidas,'['.$key.']valor',array('class' => 'input-small')); ?><span class="add-on"> cm.</span></div></div>
					<?php echo $form->error($medidas,'[$key]valor'); ?>
				</div><!-- /control-group -->
			</div>		
			<?php if( $i == 4 ): ?>
				<?php $i = 1; ?>
				</div>				
			<?php endif; ?>		
		<?php endif; ?>
	<?php endforeach; ?>
	</div>
	<?php $this->endWidget(); ?>
	</div>
</div>
<div class="row-fluid"><center>	<?php echo CHtml::submitButton($medidas->isNewRecord ? 'Insertar' : 'Guardar',array('class'=>'btn btn-primary btn-large')); ?></center></div>
<div class="clearfix">&nbsp;</div>