<div class="row-fluid">
	<div class="span12"><center><?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Listado de clientes',
    				'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    				'size'=>'large', // null, 'large', 'small' or 'mini'
    				'icon'=>'arrow-left white',
    				'url'=>array('user/listarHijos'),
    				'toggle'=>false,
    				)); ?></center></div>
    		<?php if( !empty($model) ): ?>
    		<h1>Ficha de <?php echo  CHtml::encode($model->firstname." ".$model->lastname); ?></h1>

    			<div class="row-fluid">
    				<div class="ficha">
					<?php $this->renderPartial('_menuficha',array('model' => $model)); ?>
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
						<div><p>Productos recomendados para el cliente, y cualquier otra recomendación, en base al estudio realizado y/o los tratamientos del cliente:</p></div>
						<?php $form=$this->beginWidget('CActiveForm', array(
							'id'=>'profile-form',
							// Please note: When you enable ajax validation, make sure the corresponding
							// controller action is handling ajax validation correctly.
							// There is a call to performAjaxValidation() commented in generated controller code.
							// See class documentation of CActiveForm for details on this.
							'enableAjaxValidation'=>false,
							)); ?>
								<div class="row-fluid">
								<div class="span12">					
								<?php $this->widget('application.extensions.cleditor.ECLEditor', array(
        'model'=>$model,
        'attribute'=>'recomendaciones', //Model attribute name. Nome do atributo do modelo.
        'options'=>array(
            'width'=>'100%',
            'height'=>250,
            'useCSS'=>true,
        ),
        'value'=>$model->recomendaciones, //If you want pass a value for the widget. I think you will. Se você precisar passar um valor para o gadget. Eu acho irá.
    )); ?>
								<?php echo $form->error($model,'recomendaciones'); ?>
								</div>
								<div class="span12">
									<div class="control-group">		
									<br/>				
									<center><?php echo CHtml::submitButton($model->isNewRecord ? 'Insertar' : 'Guardar', array('class' => 'btn btn-info btn-large')); ?></center>
									</div>
								</div>
							</div>
							<?php $this->endWidget(); ?>
							<div class="clearfix"><div><p>El cliente podrá consultar estas recomendaciones cuando acceda a la plataforma</p></div></div>
					</div><!-- contenido -->
					</div><!-- /ficha -->
    			</div><!-- /row-fluid -->
    		<?php else: ?>
    			<div class="alert alert-warning">No se ha definido ningún usuario</div>
    		<?php endif;?>
   </div>