<?php
/* @var $this MedidasusuarioController */
/* @var $model Medidasusuario */

$this->breadcrumbs=array(
	'Medidasusuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Medidasusuario', 'url'=>array('index')),
	array('label'=>'Manage Medidasusuario', 'url'=>array('admin')),
);
?>

<h1>Create Medidasusuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>