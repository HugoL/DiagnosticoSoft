<?php
/* @var $this MorfologiaController */
/* @var $model Morfologia */

$this->breadcrumbs=array(
	'Morfologias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Morfologia', 'url'=>array('index')),
	array('label'=>'Create Morfologia', 'url'=>array('create')),
	array('label'=>'Update Morfologia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Morfologia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Morfologia', 'url'=>array('admin')),
);
?>

<h1>View Morfologia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'caracteristicas',
	),
)); ?>
