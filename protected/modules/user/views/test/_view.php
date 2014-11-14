<?php
/* @var $this TestController */
/* @var $data Test */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respuestasanguinea')); ?>:</b>
	<?php echo CHtml::encode($data->respuestasanguinea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respuestalinfatica')); ?>:</b>
	<?php echo CHtml::encode($data->respuestalinfatica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respuestabiliosa')); ?>:</b>
	<?php echo CHtml::encode($data->respuestabiliosa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respuestanerviosa')); ?>:</b>
	<?php echo CHtml::encode($data->respuestanerviosa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('activado')); ?>:</b>
	<?php echo CHtml::encode($data->activado); ?>
	<br />

	*/ ?>

</div>