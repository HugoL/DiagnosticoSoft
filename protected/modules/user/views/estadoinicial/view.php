<?php
/* @var $this EstadoinicialController */
/* @var $model Estadoinicial */

$this->breadcrumbs=array(
	'Estadoinicials'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Estadoinicial', 'url'=>array('index')),
	array('label'=>'Create Estadoinicial', 'url'=>array('create')),
	array('label'=>'Update Estadoinicial', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Estadoinicial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estadoinicial', 'url'=>array('admin')),
);
?>

<h1>View Estadoinicial #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'peso_actual',
		'peso_ideal',
		'fecha',
		'observaciones',
		'id_usuario',
	),
)); ?>
