<?php
/* @var $this CentroController */
/* @var $model Centro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'centro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'movil'); ?>
		<?php echo $form->textField($model,'movil',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'movil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mapa'); ?>
		<?php echo $form->textArea($model,'mapa',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mapa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poblacion'); ?>
		<?php echo $form->textField($model,'poblacion',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'poblacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigopostal'); ?>
		<?php echo $form->textField($model,'codigopostal',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'codigopostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->