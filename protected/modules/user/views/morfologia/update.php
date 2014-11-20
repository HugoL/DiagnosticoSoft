<?php
/* @var $this MorfologiaController */
/* @var $model Morfologia */

$this->breadcrumbs=array(
	'Morfologias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Morfologia', 'url'=>array('index')),
	array('label'=>'Create Morfologia', 'url'=>array('create')),
	array('label'=>'View Morfologia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Morfologia', 'url'=>array('admin')),
);
?>

<h1>Update Morfologia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>