<div class="row-fluid">
	<div class="span12"><center><?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Listado de clientes',
    				'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    				'size'=>'large', // null, 'large', 'small' or 'mini'
    				'icon'=>'arrow-left white',
    				'url'=>array('user/listarHijos'),
    				'toggle'=>false,
    				)); ?></center></div>
    		<?php if( !empty($model) ): ?>
    		<h1>Ficha de <?php echo  CHtml::encode($model->firstname." ".$model->lastname); ?></h1>

    			<div class="row-fluid">
    				<div class="ficha">
					<ul class="nav nav-tabs">  
						<li><?php echo CHtml::link('Datos',array('user/verUsuario/id/'.$model->user_id)); ?></li> 
						<li><?php echo CHtml::link('Observación',array('user/observacion/id/'.$model->user_id));?></li>   
						<li class="active"><a href="#">Test</a></li>
						<li><?php echo CHtml::link('Medidas',array('user/medidas/id/'.$model->user_id));?></li>
						<li><?php echo CHtml::link('Peso',array('user/peso/id/'.$model->user_id));?></li>				    		
					</ul>
					<div class="contenido">
						<?php if(Yii::app()->user->hasFlash('success')):?>
		    				<div class="alert alert-success">
		    				    <?php echo Yii::app()->user->getFlash('success'); ?>
		    				</div>
						<?php endif; ?>
						<?php if(Yii::app()->user->hasFlash('error')):?>
		    				<div class="alert alert-error">
		    				    <?php echo Yii::app()->user->getFlash('error'); ?>
		    				</div>
						<?php endif; ?>
						<?php $this->renderPartial('_test', array('model'=>$test,'user'=>$model)); ?>
					</div><!-- contenido -->
					</div><!-- /ficha -->
    			</div><!-- /row-fluid -->
    		<?php else: ?>
    			<div class="alert alert-warning">No se ha definido ningún usuario</div>
    		<?php endif;?>
</div>