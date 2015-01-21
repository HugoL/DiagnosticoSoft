<div class="row-fluid">
	<div class="span12"><center><?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Listado de clientes',
    				'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    				'size'=>'large', // null, 'large', 'small' or 'mini'
    				'icon'=>'arrow-left white',
    				'url'=>array('user/listarHijos'),
    				'toggle'=>false,
    				)); ?></center></div>
    		<?php if( !empty($user) ): ?>
    		<h1>Ficha de <?php echo  CHtml::encode($user->firstname." ".$user->lastname); ?></h1>

    			<div class="row-fluid ficha">
    				<div class="ficha">
					<?php  $this->widget('UserMenu',array('id_usuario'=>$user->user_id)); ?>
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
					<div><?php $this->renderPartial('_peso',array(
						'peso' => $peso,
					)); ?></div>
					<div class="clearfix">&nbsp;</div>
					<?php if( !empty($pesos) ): ?>
					<?php $datos = array( ); 
						  $datos[] = array('Fecha', 'Peso');
					?>
						<?php foreach ($pesos as $key => $peso) : ?>
							<?php 
							$fecha = date('d-m-Y',strtotime($peso->fecha));
							$datos[] = array($fecha, floatval($peso->peso)); 
							?>
						<?php endforeach; ?>
							<div class="row-fluid">
								<div class="grafica"><?php
									 $this->widget('ext.Hzl.google.HzlVisualizationChart', array('visualization' => 'LineChart',
							            'data' =>   $datos,
							            'options' => array('title' => 'Evolución de peso'))); ?>
								</div>
							</div>						
					<?php endif; ?>
					</div><!-- contenido -->
					</div><!-- /ficha -->
    			</div><!-- /row-fluid -->
    		<?php else: ?>
    			<div class="alert alert-warning">No se ha definido ningún usuario</div>
    		<?php endif;?>
</div>