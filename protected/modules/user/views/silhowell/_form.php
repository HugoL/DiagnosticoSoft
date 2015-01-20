<?php
/* @var $this SilhowellController */
/* @var $model Silhowell */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'silhowell-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con  <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'total_fit'); ?>
		<?php echo $form->textField($model,'total_fit'); ?>
		<?php echo $form->error($model,'total_fit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_comfort'); ?>
		<?php echo $form->textField($model,'total_comfort'); ?>
		<?php echo $form->error($model,'total_comfort'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actual_fit'); ?>
		<?php echo $form->textField($model,'actual_fit'); ?>
		<?php echo $form->error($model,'actual_fit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actual_comfort'); ?>
		<?php echo $form->textField($model,'actual_comfort'); ?>
		<?php echo $form->error($model,'actual_comfort'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ultimavez'); ?>
		<?php echo $form->textField($model,'ultimavez'); ?>
		<?php echo $form->error($model,'ultimavez'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textArea($model,'texto',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'texto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar',array()); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->