<?php
/* @var $this CentroController */
/* @var $model Centro */

$this->breadcrumbs=array(
	'Centros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Centro', 'url'=>array('index')),
	array('label'=>'Manage Centro', 'url'=>array('admin')),
);
?>

<h1>Create Centro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>