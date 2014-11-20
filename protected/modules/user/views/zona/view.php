<?php
/* @var $this ZonaController */
/* @var $model Zona */

$this->breadcrumbs=array(
	'Zonas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Zona', 'url'=>array('index')),
	array('label'=>'Create Zona', 'url'=>array('create')),
	array('label'=>'Update Zona', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Zona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Zona', 'url'=>array('admin')),
);
?>

<h1>View Zona #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
	),
)); ?>
