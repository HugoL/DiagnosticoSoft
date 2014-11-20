<?php
/* @var $this ObservacionController */
/* @var $model Observacion */
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
		<?php echo $form->label($model,'motivo'); ?>
		<?php echo $form->textField($model,'motivo',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tratamientosAnteriores'); ?>
		<?php echo $form->textArea($model,'tratamientosAnteriores',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'variacionesPeso'); ?>
		<?php echo $form->textArea($model,'variacionesPeso',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pesoMax'); ?>
		<?php echo $form->textField($model,'pesoMax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pesoMin'); ?>
		<?php echo $form->textField($model,'pesoMin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pesoIdeal'); ?>
		<?php echo $form->textField($model,'pesoIdeal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tallaActual'); ?>
		<?php echo $form->textField($model,'tallaActual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tallaDeseada'); ?>
		<?php echo $form->textField($model,'tallaDeseada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tensionMax'); ?>
		<?php echo $form->textField($model,'tensionMax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tensionMin'); ?>
		<?php echo $form->textField($model,'tensionMin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enfermedades'); ?>
		<?php echo $form->textArea($model,'enfermedades',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alergias'); ?>
		<?php echo $form->textArea($model,'alergias',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terapias'); ?>
		<?php echo $form->textArea($model,'terapias',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menstruaciones'); ?>
		<?php echo $form->textArea($model,'menstruaciones',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'embarazos'); ?>
		<?php echo $form->textField($model,'embarazos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'partos'); ?>
		<?php echo $form->textField($model,'partos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'abortos'); ?>
		<?php echo $form->textField($model,'abortos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metodoAnticonceptivo'); ?>
		<?php echo $form->textArea($model,'metodoAnticonceptivo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diuresis'); ?>
		<?php echo $form->textArea($model,'diuresis',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suenyo'); ?>
		<?php echo $form->textArea($model,'suenyo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ritmoIntestinal'); ?>
		<?php echo $form->textArea($model,'ritmoIntestinal',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actividadFisica'); ?>
		<?php echo $form->textArea($model,'actividadFisica',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'digestiones'); ?>
		<?php echo $form->textField($model,'digestiones',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pesadezPiernas'); ?>
		<?php echo $form->textArea($model,'pesadezPiernas',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dolor'); ?>
		<?php echo $form->textArea($model,'dolor',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calambres'); ?>
		<?php echo $form->textField($model,'calambres'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'piesFrios'); ?>
		<?php echo $form->textField($model,'piesFrios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'manosFrias'); ?>
		<?php echo $form->textField($model,'manosFrias'); ?>
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