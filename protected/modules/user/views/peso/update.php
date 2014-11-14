<?php
/* @var $this PesoController */
/* @var $model Peso */

$this->breadcrumbs=array(
	'Pesos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Peso', 'url'=>array('index')),
	array('label'=>'Create Peso', 'url'=>array('create')),
	array('label'=>'View Peso', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Peso', 'url'=>array('admin')),
);
?>

<h1>Update Peso <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>