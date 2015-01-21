<?php
/* @var $this SilhowellController */
/* @var $data Silhowell */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_fit')); ?>:</b>
	<?php echo CHtml::encode($data->total_fit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_comfort')); ?>:</b>
	<?php echo CHtml::encode($data->total_comfort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actual_fit')); ?>:</b>
	<?php echo CHtml::encode($data->actual_fit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actual_comfort')); ?>:</b>
	<?php echo CHtml::encode($data->actual_comfort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ultimavez')); ?>:</b>
	<?php echo CHtml::encode($data->ultimavez); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('texto')); ?>:</b>
	<?php echo CHtml::encode($data->texto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />

	*/ ?>

</div>