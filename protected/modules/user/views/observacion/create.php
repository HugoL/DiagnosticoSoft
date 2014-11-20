<?php
/* @var $this ObservacionController */
/* @var $model Observacion */

$this->breadcrumbs=array(
	'Observacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Observacion', 'url'=>array('index')),
	array('label'=>'Manage Observacion', 'url'=>array('admin')),
);
?>

<h1>Create Observacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>