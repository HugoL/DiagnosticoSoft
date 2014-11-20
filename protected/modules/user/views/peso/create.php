<?php
/* @var $this PesoController */
/* @var $model Peso */

$this->breadcrumbs=array(
	'Pesos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Peso', 'url'=>array('index')),
	array('label'=>'Manage Peso', 'url'=>array('admin')),
);
?>

<h1>Create Peso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>