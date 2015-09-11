<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listado de Productos', 'url'=>array('index')),
	array('label'=>'Nuevo Producto', 'url'=>array('create')),
	array('label'=>'Ver Producto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Modificar Producto', 'url'=>array('admin')),
);
?>

<h1>Modificar Producto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>