<?php
/* @var $this CentroController */
/* @var $model Centro */

$this->breadcrumbs=array(
	'Centros'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Centro', 'url'=>array('index')),
	array('label'=>'Create Centro', 'url'=>array('create')),
	array('label'=>'Update Centro', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Centro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Centro', 'url'=>array('admin')),
);
?>

<h1>View Centro #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'direccion',
		'telefono',
		'movil',
		'email',
		'mapa',
		'poblacion',
		'codigopostal',
		'id_usuario',
	),
)); ?>
