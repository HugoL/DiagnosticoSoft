<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listado de Productos', 'url'=>array('index')),
	array('label'=>'Modificar Producto', 'url'=>array('admin')),
);
?>

<h1>Nuevo Producto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>