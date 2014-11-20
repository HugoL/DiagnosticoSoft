<?php
/* @var $this MedidasusuarioController */
/* @var $model Medidasusuario */

$this->breadcrumbs=array(
	'Medidasusuarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Medidasusuario', 'url'=>array('index')),
	array('label'=>'Create Medidasusuario', 'url'=>array('create')),
	array('label'=>'View Medidasusuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Medidasusuario', 'url'=>array('admin')),
);
?>

<h1>Update Medidasusuario <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>