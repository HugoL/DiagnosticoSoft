<ul class="nav nav-tabs">  
	<li <?php if( strcmp(Yii::app()->controller->action->id,'verUsuario') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Datos',array('user/verUsuario/id/'.$id_usuario)); ?></li> 
	<li <?php if( strcmp(Yii::app()->controller->action->id,'observacion') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Observación',array('user/observacion/id/'.$id_usuario));?></li> 	
	<li <?php if( strcmp(Yii::app()->controller->action->id,'test') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Morfología',array('user/test/id/'.$id_usuario));?></li>
	<li <?php if( strcmp(Yii::app()->controller->action->id,'medidas') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Medidas',array('user/medidas/id/'.$id_usuario));?></li>
	<li <?php if( strcmp(Yii::app()->controller->action->id,'peso') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Peso',array('user/peso/id/'.$id_usuario));?></li>	
	<li <?php if( strcmp(Yii::app()->controller->action->id,'tratamiento') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Tratamientos',array('user/tratamiento/id/'.$id_usuario));?></li>
	<li <?php if( strcmp(Yii::app()->controller->action->id,'recomendar') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Productos Recom.',array('user/recomendar/id/'.$id_usuario));?></li>		
	<li <?php if( strcmp(Yii::app()->controller->id,'silhowell') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Silhowell',array('silhowell/ver/id/'.$id_usuario));?></li>
	<li <?php if( strcmp(Yii::app()->controller->id,'ph') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Valoración PH',array('ph/index/id/'.$id_usuario));?></li>	
	<li <?php if( strcmp(Yii::app()->controller->id,'producto') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Productos',array('producto/listado/id/'.$id_usuario));?></li>		    		
</ul>		    		
</ul>