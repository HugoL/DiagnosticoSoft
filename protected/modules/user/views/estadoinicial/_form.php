<?php
/* @var $this EstadoinicialController */
/* @var $model Estadoinicial */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'estadoinicial-form',
		'enableAjaxValidation'=>false,
		)); ?>

		<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

		<?php echo $form->errorSummary($model); ?>

		<div class="row-fluid">
			<div class="well">
				<div class="span2">
					<?php echo $form->labelEx($model,'peso_actual'); ?>
					<?php echo $form->textField($model,'peso_actual',array('class' => 'input-small')); ?>
					<?php echo $form->error($model,'peso_actual'); ?>
				</div>

				<div class="span2">
					<?php echo $form->labelEx($model,'peso_ideal'); ?>
					<?php echo $form->textField($model,'peso_ideal',array('class' => 'input-small')); ?>
					<?php echo $form->error($model,'peso_ideal'); ?>
				</div>

				<div class="span3">
					<?php echo $form->labelEx($model,'observaciones'); ?>
					<?php echo $form->textArea($model,'observaciones',array('rows'=>3, 'cols'=>50)); ?>
					<?php echo $form->error($model,'observaciones'); ?>
				</div>

				<div class="span1">
					<?php echo CHtml::submitButton('Guardar',array('class'=> 'btn btn-warning btn-large')); ?>
				</div>
				<div class="clearfix">&nbsp;</div>
			</div>
		</div>
		<?php $this->endWidget(); ?>

</div><!-- form -->