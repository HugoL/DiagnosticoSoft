<?php
/* @var $this SilhowellController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="row-fluid">
	<div class="span12"><center><?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Listado de clientes',
    				'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    				'size'=>'large', // null, 'large', 'small' or 'mini'
    				'icon'=>'arrow-left white',
    				'url'=>array('user/listarHijos'),
    				'toggle'=>false,
    				)); ?></center></div>
    		<?php if( !empty($profile) ): ?>
    		<h1>Ficha de <?php echo  CHtml::encode($profile->firstname." ".$profile->lastname); ?></h1>

<div class="row-fluid ficha">
	<div class="ficha">
		<?php  $this->widget('UserMenu',array('id_usuario'=>$profile->user_id)); ?>
		<div class="contenido">			
			<h3>Tratamientos Silhowell del cliente</h3>

			<?php foreach ($silhowells as $key => $silhowell) {
				$this->renderPartial('_view',array('data'=>$silhowell));
			}
			?>
			<?php echo CHtml::link('Añadir nuevo',array('estadoinicial/create', 'idUsuario'=>$profile->user_id),array('class'=>'btn btn-warning btn-large')); ?>
		</div>
	</div>
</div>
<?php else: ?>
    			<div class="alert alert-warning">No se ha definido ningún usuario</div>
    		<?php endif;?>
</div>