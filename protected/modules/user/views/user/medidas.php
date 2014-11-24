<div class="row-fluid">
	<div class="span12"><center><?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Listado de clientes',
    				'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    				'size'=>'large', // null, 'large', 'small' or 'mini'
    				'icon'=>'arrow-left white',
    				'url'=>array('user/listarHijos'),
    				'toggle'=>false,
    				)); ?></center></div>
    		<?php if( !empty($user) ): ?>
    		<h1>Ficha de <?php echo  CHtml::encode($user->firstname." ".$user->lastname); ?></h1>

    			<div class="row-fluid">
    				<div class="ficha">
					<?php $this->renderPartial('_menuficha',array('model' => $user)); ?>
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
						<?php if(Yii::app()->user->hasFlash('warning')):?>
		    				<div class="alert alert-warning">
		    				    <?php echo Yii::app()->user->getFlash('warning'); ?>
		    				</div>
						<?php endif; ?>
						<?php $this->renderPartial('_medidas', array('zonas'=>$zonas,'user'=>$user,'medidas'=>$medidas)); ?>
					</div><!-- contenido -->
					</div><!-- /ficha -->
    			</div><!-- /row-fluid -->

    			<?php if( !empty($totalmedidas) ): ?>
    				<?php $datos1 = array( );
						  $datos1[] = array('Fecha', 'Total medidas');
					?>
    				<div class="row-fluid">
    					<?php foreach ($totalmedidas as $key => $medida): ?>
    						<?php 
								$fecha = date('d-m-Y',strtotime($medida->fecha));
								$datos1[] = array($fecha, floatval($medida->total)); 
							?>
    					<?php endforeach; ?>
    			
						<div class="grafica"><?php
							 $this->widget('ext.Hzl.google.HzlVisualizationChart', array('visualization' => 'LineChart',
					            'data' =>   $datos1,
					            'options' => array('title' => 'Evolución medidas circulares',
					            	'curveType' => 'function',

					            ))); ?>
						</div>
					</div>
    			<?php endif; ?>
    		<?php else: ?>
    			<div class="alert alert-warning">No se ha definido ningún usuario</div>
    		<?php endif;?>
</div>