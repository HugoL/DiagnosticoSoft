<?php
/* @var $this MorfologiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Morfologias',
);

$this->menu=array(
	array('label'=>'Create Morfologia', 'url'=>array('create')),
	array('label'=>'Manage Morfologia', 'url'=>array('admin')),
);
?>

<h1>Morfologias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
