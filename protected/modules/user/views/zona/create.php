<?php
/* @var $this ZonaController */
/* @var $model Zona */

$this->breadcrumbs=array(
	'Zonas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Zona', 'url'=>array('index')),
	array('label'=>'Manage Zona', 'url'=>array('admin')),
);
?>

<h1>Create Zona</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>