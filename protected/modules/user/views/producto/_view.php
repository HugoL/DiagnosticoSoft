<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

</div>