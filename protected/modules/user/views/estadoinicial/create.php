<?php
/* @var $this EstadoinicialController */
/* @var $model Estadoinicial */

$this->breadcrumbs=array(
	'Estadoinicials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estadoinicial', 'url'=>array('index')),
	array('label'=>'Manage Estadoinicial', 'url'=>array('admin')),
);
?>

<h1>Calcular el número de sesiones</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>