<?php
/* @var $this ObservacionController */
/* @var $model Observacion */

$this->breadcrumbs=array(
	'Observacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Observacion', 'url'=>array('index')),
	array('label'=>'Create Observacion', 'url'=>array('create')),
	array('label'=>'View Observacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Observacion', 'url'=>array('admin')),
);
?>

<h1>Update Observacion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>