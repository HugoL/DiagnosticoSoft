<?php
/* @var $this ObservacionController */
/* @var $model Observacion */

$this->breadcrumbs=array(
	'Observacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Observacion', 'url'=>array('index')),
	array('label'=>'Create Observacion', 'url'=>array('create')),
	array('label'=>'Update Observacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Observacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Observacion', 'url'=>array('admin')),
);
?>

<h1>View Observacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'motivo',
		'tratamientosAnteriores',
		'variacionesPeso',
		'pesoMax',
		'pesoMin',
		'pesoIdeal',
		'tallaActual',
		'tallaDeseada',
		'tensionMax',
		'tensionMin',
		'enfermedades',
		'alergias',
		'terapias',
		'menstruaciones',
		'embarazos',
		'partos',
		'abortos',
		'metodoAnticonceptivo',
		'diuresis',
		'suenyo',
		'ritmoIntestinal',
		'actividadFisica',
		'digestiones',
		'pesadezPiernas',
		'dolor',
		'calambres',
		'piesFrios',
		'manosFrias',
		'id_usuario',
	),
)); ?>
