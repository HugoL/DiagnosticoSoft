<div class="span12"><center><?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Listado de clientes',
    				'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    				'size'=>'large', // null, 'large', 'small' or 'mini'
    				'icon'=>'arrow-left white',
    				'url'=>array('user/listarHijos'),
    				'toggle'=>false,
    				)); ?></center></div> <br/>   		
<h1>Ficha de <?php echo  CHtml::encode($user->firstname." ".$user->lastname); ?></h1>

<div class="row-fluid ficha">
	<div class="ficha">
	   <?php  $this->widget('UserMenu',array('id_usuario'=>$user->user_id)); ?>
	   <div class="text-center"><center><?php echo CHtml::link('Volver al listado de productos',array('producto/listado/id/'.$user->user_id),array('class' => 'btn btn-info')); ?>
	   		<?php if( Yii::app()->getModule('user')->esAlgunAdmin() ): ?>
			<?php echo CHtml::link('Modificar Producto',array('producto/update/id/'.$model->id),array('class' => 'btn btn-inverse')); ?>
		<?php endif; ?>
	   </center></div>
	    
	   <div class="contenido container producto">
	   	<h1><?php echo $model->nombre; ?></h1>
	   	<?php echo $model->contenido; ?>
	   	<?php if( $model->id == 1 ): ?>
	   		<div class="text-center"><img src="<?php echo Yii::app()->request->baseUrl.'/images/productos/'.$model->id ?>/facial.jpg" /></div>
	   	<?php endif; ?>	   	
	   </div>
	</div>
</div>