<?php
/* @var $this ObservacionController */
/* @var $model Observacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'observacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-fluid span11 well well-small clearfix">
		<div class="span4">
		<?php echo $form->labelEx($model,'motivo'); ?>
		<?php echo $form->textField($model,'motivo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'motivo'); ?>
		</div>
		<div class="span4">
		<?php echo $form->labelEx($model,'tratamientosAnteriores'); ?>
		<?php echo $form->textArea($model,'tratamientosAnteriores',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tratamientosAnteriores'); ?>
		</div>
		<div class="span4">
		<?php echo $form->labelEx($model,'variacionesPeso'); ?>
		<?php echo $form->textArea($model,'variacionesPeso',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'variacionesPeso'); ?>
		</div>
	</div>

	<div class="row-fluid span11 well well-small clearfix">
		<div class="span4">
		<?php echo $form->labelEx($model,'pesoMax'); ?>
		<?php echo $form->textField($model,'pesoMax'); ?>
		<?php echo $form->error($model,'pesoMax'); ?>
		</div>
		<div class="span4">
		<?php echo $form->labelEx($model,'pesoMin'); ?>
		<?php echo $form->textField($model,'pesoMin'); ?>
		<?php echo $form->error($model,'pesoMin'); ?>
		</div>
		<div class="span4">
		<?php echo $form->labelEx($model,'pesoIdeal'); ?>
		<?php echo $form->textField($model,'pesoIdeal'); ?>
		<?php echo $form->error($model,'pesoIdeal'); ?>
		</div>
	</div>

	<div class="row-fluid span11 well well-small clearfix">
		<div class="span4">
		<?php echo $form->labelEx($model,'tallaActual'); ?>
		<?php echo $form->textField($model,'tallaActual'); ?>
		<?php echo $form->error($model,'tallaActual'); ?>
		</div>
		<div class="span4">
		<?php echo $form->labelEx($model,'tallaDeseada'); ?>
		<?php echo $form->textField($model,'tallaDeseada'); ?>
		<?php echo $form->error($model,'tallaDeseada'); ?>
		</div>
	</div>

	<div class="row-fluid span11 well well-small clearfix">
		<div class="span4">
		<?php echo $form->labelEx($model,'tensionMax'); ?>
		<?php echo $form->textField($model,'tensionMax'); ?>
		<?php echo $form->error($model,'tensionMax'); ?>
		</div>
		<div class="span4">
		<?php echo $form->labelEx($model,'tensionMin'); ?>
		<?php echo $form->textField($model,'tensionMin'); ?>
		<?php echo $form->error($model,'tensionMin'); ?>
		</div>
	</div>

	<div class="row-fluid span11 well well-small clearfix">
		<div class="span4">
		<?php echo $form->labelEx($model,'enfermedades'); ?>
		<?php echo $form->textArea($model,'enfermedades',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'enfermedades'); ?>
		</div>
		<div class="span4">
		<?php echo $form->labelEx($model,'alergias'); ?>
		<?php echo $form->textArea($model,'alergias',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alergias'); ?>
		</div>
		<div class="span4">
		<?php echo $form->labelEx($model,'terapias'); ?>
		<?php echo $form->textArea($model,'terapias',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'terapias'); ?>
		</div>
	</div>

	<div class="row-fluid span11 well well-small clearfix">
		<div class="span3">
		<?php echo $form->labelEx($model,'menstruaciones'); ?>
		<?php echo $form->textArea($model,'menstruaciones',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'menstruaciones'); ?>
		</div>
		<div class="span2">
		<?php echo $form->labelEx($model,'embarazos'); ?>
		<?php echo $form->textField($model,'embarazos'); ?>
		<?php echo $form->error($model,'embarazos'); ?>
		</div>
		<div class="span2">
		<?php echo $form->labelEx($model,'partos'); ?>
		<?php echo $form->textField($model,'partos'); ?>
		<?php echo $form->error($model,'partos'); ?>
		</div>
		<div class="span2">
		<?php echo $form->labelEx($model,'abortos'); ?>
		<?php echo $form->textField($model,'abortos'); ?>
		<?php echo $form->error($model,'abortos'); ?>
		</div>
		<div class="span3">
		<?php echo $form->labelEx($model,'metodoAnticonceptivo'); ?>
		<?php echo $form->textArea($model,'metodoAnticonceptivo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'metodoAnticonceptivo'); ?>
		</div>
	</div>

	<div class="row-fluid span11 well well-small clearfix">
		<div class="span4">
		<?php echo $form->labelEx($model,'diuresis'); ?>
		<?php echo $form->textArea($model,'diuresis',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'diuresis'); ?>
		</div>
		<div class="span4">
		<?php echo $form->labelEx($model,'suenyo'); ?>
		<?php echo $form->textArea($model,'suenyo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'suenyo'); ?>
		</div>
		<div class="span4">
		<?php echo $form->labelEx($model,'ritmoIntestinal'); ?>
		<?php echo $form->textArea($model,'ritmoIntestinal',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ritmoIntestinal'); ?>
		</div>
	</div>

	<div class="row-fluid span11 well well-small clearfix">
		<div class="span4">
		<?php echo $form->labelEx($model,'actividadFisica'); ?>
		<?php echo $form->textArea($model,'actividadFisica',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'actividadFisica'); ?>
		</div>
		<div class="span4">
		<?php echo $form->labelEx($model,'digestiones'); ?>
		<?php echo $form->textField($model,'digestiones',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'digestiones'); ?>
		</div>
		<div class="span4">
		<?php echo $form->labelEx($model,'pesadezPiernas'); ?>
		<?php echo $form->textArea($model,'pesadezPiernas',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pesadezPiernas'); ?>
		</div>
	</div>

	<div class="row-fluid span11 well well-small clearfix">
		<div class="span3">
		<?php echo $form->labelEx($model,'dolor'); ?>
		<?php echo $form->textArea($model,'dolor',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dolor'); ?>
		</div>
		<div class="span3">
		<?php echo $form->labelEx($model,'calambres'); ?>
		<?php echo $form->textField($model,'calambres'); ?>
		<?php echo $form->error($model,'calambres'); ?>
		</div>
		<div class="span3">
		<?php echo $form->labelEx($model,'piesFrios'); ?>
		<?php echo $form->textField($model,'piesFrios'); ?>
		<?php echo $form->error($model,'piesFrios'); ?>
		</div>
		<div class="span3">
		<?php echo $form->labelEx($model,'manosFrias'); ?>
		<?php echo $form->textField($model,'manosFrias'); ?>
		<?php echo $form->error($model,'manosFrias'); ?>
		</div>
	</div>

		<?php echo $form->hiddenField($model,'id_usuario',array('value'=>$user->user_id)); ?>
	
	<div class="clearfix">&nbsp;</div>
	<div class="row-fluid buttons">
	<center>	<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class'=>'btn btn-info btn-large')); ?></center>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->