<?php
/* @var $this ObservacionController */
/* @var $data Observacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo')); ?>:</b>
	<?php echo CHtml::encode($data->motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tratamientosAnteriores')); ?>:</b>
	<?php echo CHtml::encode($data->tratamientosAnteriores); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('variacionesPeso')); ?>:</b>
	<?php echo CHtml::encode($data->variacionesPeso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pesoMax')); ?>:</b>
	<?php echo CHtml::encode($data->pesoMax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pesoMin')); ?>:</b>
	<?php echo CHtml::encode($data->pesoMin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pesoIdeal')); ?>:</b>
	<?php echo CHtml::encode($data->pesoIdeal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tallaActual')); ?>:</b>
	<?php echo CHtml::encode($data->tallaActual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tallaDeseada')); ?>:</b>
	<?php echo CHtml::encode($data->tallaDeseada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tensionMax')); ?>:</b>
	<?php echo CHtml::encode($data->tensionMax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tensionMin')); ?>:</b>
	<?php echo CHtml::encode($data->tensionMin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfermedades')); ?>:</b>
	<?php echo CHtml::encode($data->enfermedades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alergias')); ?>:</b>
	<?php echo CHtml::encode($data->alergias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terapias')); ?>:</b>
	<?php echo CHtml::encode($data->terapias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menstruaciones')); ?>:</b>
	<?php echo CHtml::encode($data->menstruaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('embarazos')); ?>:</b>
	<?php echo CHtml::encode($data->embarazos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partos')); ?>:</b>
	<?php echo CHtml::encode($data->partos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abortos')); ?>:</b>
	<?php echo CHtml::encode($data->abortos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metodoAnticonceptivo')); ?>:</b>
	<?php echo CHtml::encode($data->metodoAnticonceptivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diuresis')); ?>:</b>
	<?php echo CHtml::encode($data->diuresis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suenyo')); ?>:</b>
	<?php echo CHtml::encode($data->suenyo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ritmoIntestinal')); ?>:</b>
	<?php echo CHtml::encode($data->ritmoIntestinal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actividadFisica')); ?>:</b>
	<?php echo CHtml::encode($data->actividadFisica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('digestiones')); ?>:</b>
	<?php echo CHtml::encode($data->digestiones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pesadezPiernas')); ?>:</b>
	<?php echo CHtml::encode($data->pesadezPiernas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dolor')); ?>:</b>
	<?php echo CHtml::encode($data->dolor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calambres')); ?>:</b>
	<?php echo CHtml::encode($data->calambres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('piesFrios')); ?>:</b>
	<?php echo CHtml::encode($data->piesFrios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manosFrias')); ?>:</b>
	<?php echo CHtml::encode($data->manosFrias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />

	*/ ?>

</div>