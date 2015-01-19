<?php
/* @var $this SilhowellController */
/* @var $model Silhowell */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_fit'); ?>
		<?php echo $form->textField($model,'total_fit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_comfort'); ?>
		<?php echo $form->textField($model,'total_comfort'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actual_fit'); ?>
		<?php echo $form->textField($model,'actual_fit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actual_comfort'); ?>
		<?php echo $form->textField($model,'actual_comfort'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ultimavez'); ?>
		<?php echo $form->textField($model,'ultimavez'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'texto'); ?>
		<?php echo $form->textArea($model,'texto',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->