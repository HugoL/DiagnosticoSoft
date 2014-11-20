<?php
/* @var $this MedidasusuarioController */
/* @var $model Medidasusuario */

$this->breadcrumbs=array(
	'Medidasusuarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Medidasusuario', 'url'=>array('index')),
	array('label'=>'Create Medidasusuario', 'url'=>array('create')),
	array('label'=>'Update Medidasusuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Medidasusuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Medidasusuario', 'url'=>array('admin')),
);
?>

<h1>View Medidasusuario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
		'id_zona',
		'id_usuario',
		'fecha_creacion',
		'observaciones',
	),
)); ?>
