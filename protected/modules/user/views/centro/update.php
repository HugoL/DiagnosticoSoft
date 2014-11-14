<?php
/* @var $this CentroController */
/* @var $model Centro */

$this->breadcrumbs=array(
	'Centros'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Centro', 'url'=>array('index')),
	array('label'=>'Create Centro', 'url'=>array('create')),
	array('label'=>'View Centro', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Centro', 'url'=>array('admin')),
);
?>

<h1>Update Centro <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>