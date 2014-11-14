<?php
/* @var $this PesoController */
/* @var $model Peso */

$this->breadcrumbs=array(
	'Pesos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Peso', 'url'=>array('index')),
	array('label'=>'Create Peso', 'url'=>array('create')),
	array('label'=>'Update Peso', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Peso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Peso', 'url'=>array('admin')),
);
?>

<h1>View Peso #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'peso',
		'fecha',
		'observaciones',
		'id_usuario',
	),
)); ?>
