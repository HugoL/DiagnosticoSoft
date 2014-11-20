<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tratamiento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-fluid">
		<div class="span3">
		<?php echo $form->labelEx($model,'tratamiento'); ?>
		<?php echo $form->textField($model,'tratamiento'); ?>
		<?php echo $form->error($model,'tratamiento'); ?>
		</div>
		<div class="span3">
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                'name'=>'Tratamiento[fecha_inicio]',
                                'id'=>'Tratamiento_fecha_inicio',
                            	'value'=>date('Y-m-d'),
                                'options'=>array(
                                'showAnim'=>'fold',
                                ),
                                'htmlOptions'=>array(
                                'style'=>'height:20px;',
                                'class'=>'input-small',
                                ),
        )); ?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
		</div>
		<div class="span3">
		<?php echo $form->labelEx($model,'fecha_fin'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                'name'=>'Tratamiento[fecha_fin]',
                                'id'=>'Tratamiento_fecha_fin',
                            	'value'=>date('Y-m-d'),
                                'options'=>array(
                                'showAnim'=>'fold',
                                ),
                                'htmlOptions'=>array(
                                'style'=>'height:20px;',
                                'class'=>'input-small',
                                ),
        )); ?>
		<?php echo $form->error($model,'fecha_fin'); ?>
		</div>
		<div class="span3">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',             array('class'=>'input-large')); ?>
		<?php echo $form->error($model,'descripcion'); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span3">
		<?php echo $form->labelEx($model,'finalizado'); ?>
		<?php echo $form->checkBox($model,'finalizado', array('value'=>1, 'uncheckValue'=>0)); ?>		
		<?php echo $form->error($model,'finalizado'); ?>
		</div>
		<div class="span3">
		<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo $form->textField($model,'precio',array('class' => 'input-small')); ?>
		<?php echo $form->error($model,'precio'); ?>
		</div>
		<div class="span3">
		<?php echo $form->labelEx($model,'sesiones'); ?>
		<?php echo $form->textField($model,'sesiones',array('class' => 'input-small')); ?>
		<?php echo $form->error($model,'sesiones'); ?>
		</div>
		<div class="span3">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones'); ?>
		<?php echo $form->error($model,'observaciones'); ?>
		</div>
	</div>
	

	<div class="row-fluid buttons">
	<center>	<?php echo CHtml::submitButton($model->isNewRecord ? 'Insertar' : 'Guardar',array('class'=>'btn btn-primary btn-large')); ?></center>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->