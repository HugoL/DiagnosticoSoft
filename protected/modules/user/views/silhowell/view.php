<?php
/* @var $this SilhowellController */
/* @var $model Silhowell */

$this->breadcrumbs=array(
	'Silhowells'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Silhowell', 'url'=>array('index')),
	array('label'=>'Create Silhowell', 'url'=>array('create')),
	array('label'=>'Update Silhowell', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Silhowell', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Silhowell', 'url'=>array('admin')),
);
?>

<h1>View Silhowell #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'total_fit',
		'total_comfort',
		'actual_fit',
		'actual_comfort',
		'fecha',
		'ultimavez',
		'texto',
		'id_usuario',
	),
)); ?>
