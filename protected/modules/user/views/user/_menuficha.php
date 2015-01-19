<ul class="nav nav-tabs">  
	<li <?php if( strcmp(Yii::app()->controller->action->id,'verUsuario') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Datos',array('user/verUsuario/id/'.$model->user_id)); ?></li> 
	<li <?php if( strcmp(Yii::app()->controller->action->id,'observacion') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Observación',array('user/observacion/id/'.$model->user_id));?></li> 	
	<li <?php if( strcmp(Yii::app()->controller->action->id,'test') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Morfología',array('user/test/id/'.$model->user_id));?></li>
	<li <?php if( strcmp(Yii::app()->controller->action->id,'medidas') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Medidas',array('user/medidas/id/'.$model->user_id));?></li>
	<li <?php if( strcmp(Yii::app()->controller->action->id,'peso') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Peso',array('user/peso/id/'.$model->user_id));?></li>	
	<li <?php if( strcmp(Yii::app()->controller->action->id,'tratamiento') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Tratamientos',array('user/tratamiento/id/'.$model->user_id));?></li>
	<li <?php if( strcmp(Yii::app()->controller->action->id,'recomendar') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Productos Recom.',array('user/recomendar/id/'.$model->user_id));?></li>		
	<li <?php if( strcmp(Yii::app()->controller->id,'silhowell') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Silhowell',array('silhowell/ver/id/'.$model->user_id));?></li>		    		
</ul>
