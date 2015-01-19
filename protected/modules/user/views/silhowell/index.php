<?php
/* @var $this SilhowellController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Silhowells',
);

$this->menu=array(
	array('label'=>'Create Silhowell', 'url'=>array('create')),
	array('label'=>'Manage Silhowell', 'url'=>array('admin')),
);
?>

<h1>Silhowells</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
