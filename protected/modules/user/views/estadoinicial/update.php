<?php
/* @var $this EstadoinicialController */
/* @var $model Estadoinicial */

$this->breadcrumbs=array(
	'Estadoinicials'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estadoinicial', 'url'=>array('index')),
	array('label'=>'Create Estadoinicial', 'url'=>array('create')),
	array('label'=>'View Estadoinicial', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Estadoinicial', 'url'=>array('admin')),
);
?>

<h1>Update Estadoinicial <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>