<ul class="nav nav-tabs">  
	<li <?php if( strcmp(Yii::app()->controller->action->id,'verUsuario') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Datos',array('user/verUsuario/id/'.$model->user_id)); ?></li> 
	<li <?php if( strcmp(Yii::app()->controller->action->id,'observacion') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Observacion',array('user/observacion/id/'.$model->user_id));?></li>   
	<li <?php if( strcmp(Yii::app()->controller->action->id,'test') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Test',array('user/test/id/'.$model->user_id));?></li>
	<li <?php if( strcmp(Yii::app()->controller->action->id,'medidas') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Medidas',array('user/medidas/id/'.$model->user_id));?></li>
	<li <?php if( strcmp(Yii::app()->controller->action->id,'peso') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Peso',array('user/peso/id/'.$model->user_id));?></li>	
	<li <?php if( strcmp(Yii::app()->controller->action->id,'tratamiento') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Tratamientos',array('user/tratamiento/id/'.$model->user_id));?></li>			    		
</ul>