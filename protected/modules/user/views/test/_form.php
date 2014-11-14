<?php
/* @var $this TestController */
/* @var $model Test */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'test-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pregunta'); ?>
		<?php echo $form->textField($model,'pregunta',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'pregunta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'respuestasanguinea'); ?>
		<?php echo $form->textField($model,'respuestasanguinea',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'respuestasanguinea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'respuestalinfatica'); ?>
		<?php echo $form->textField($model,'respuestalinfatica',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'respuestalinfatica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'respuestabiliosa'); ?>
		<?php echo $form->textField($model,'respuestabiliosa',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'respuestabiliosa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'respuestanerviosa'); ?>
		<?php echo $form->textField($model,'respuestanerviosa',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'respuestanerviosa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activado'); ?>
		<?php echo $form->textField($model,'activado'); ?>
		<?php echo $form->error($model,'activado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->