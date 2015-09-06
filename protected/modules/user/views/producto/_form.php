<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('class'=>'span8','maxlength'=>256)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($model,'contenido'); ?>
		<?php $this->widget('application.extensions.cleditor.ECLEditor', array(
        'model'=>$model,
        'attribute'=>'contenido',
        'options'=>array(
            'width'=>'100%',
            'height'=>500,
            'useCSS'=>true,
        ),
        'value'=>$model->contenido,
    )); ?>
		<?php echo $form->error($model,'contenido'); ?>
	</div>
	<div class="clearfix">&nbsp;</div>

	<div class="row">
		<p><small>Si se selecciona "No visible" el producto no aparecerá en el listado de productos</small></p>

		<?php echo $form->dropDownList($model,'activo',array(1 => 'Visible', 0 => 'No Visible')); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear producto' : 'Guardar',array('class'=> 'btn btn-primary btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->