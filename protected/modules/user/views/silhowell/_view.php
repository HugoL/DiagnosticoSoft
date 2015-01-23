<?php
/* @var $this SilhowellController */
/* @var $data Silhowell */
?>
<div class="span12">
<div class="view span8">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td></td>
				<th><b>Fit</b></th>
				<th><b>Confort</b></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="span1">Totales</td>
				<td class="span2"><?php echo CHtml::encode($data->total_fit); ?></td>
				<td class="span2"><?php echo CHtml::encode($data->total_comfort); ?></td>
			</tr>
			<tr>
				<td class="span1">Consumidas</td>
				<td class="span2"><?php echo CHtml::encode($data->actual_fit); ?></td>
				<td class="span2"><?php echo CHtml::encode($data->actual_comfort); ?></td>
			</tr>
			<tr>
				<td><?php echo CHtml::link('Modificar',array('update','id' => $data->id),array('class' => 'btn btn-small')); ?></td>
				<td><?php echo CHtml::link('+ Fit',array('consumirFit','id' => $data->id),array('class' => 'btn btn-success btn-small')); ?></td>
				<td><?php echo CHtml::link('+ Confort',array('consumirComfort','id' => $data->id),array('class' => 'btn btn-warning btn-small')); ?></td>
			</tr>
		</tbody>
	</table>
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ultimavez')); ?>:</b>
	<?php echo CHtml::encode($data->ultimavez); ?>
	<br />	
</div>
</div>
<hr>