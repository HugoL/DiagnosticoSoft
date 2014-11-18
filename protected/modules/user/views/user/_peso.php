	<?php $form=$this->beginWidget('CActiveForm', array(
							'id'=>'peso-form',
							// Please note: When you enable ajax validation, make sure the corresponding
							// controller action is handling ajax validation correctly.
							// There is a call to performAjaxValidation() commented in generated controller code.
							// See class documentation of CActiveForm for details on this.
							'enableAjaxValidation'=>false,
						)); ?>
							<div class="row-fluid span12">
							<div class="span4">
							<?php echo $form->labelEx($peso,'peso'); ?>
							<?php echo $form->textField($peso,'peso',array('class'=>'span4')); ?>
							<?php echo $form->error($peso,'peso'); ?>
							</div>
							<div class="span4">
								<?php echo $form->labelEx($peso,'fecha'); ?>
							<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                'name'=>'Peso[fecha]',
                                'id'=>'Peso_fecha',
                            	'value'=>date('Y-m-d'),
                                'options'=>array(
                                'showAnim'=>'fold',
                                ),
                                'htmlOptions'=>array(
                                'style'=>'height:20px;'
                                ),
                        )); ?>
							</div>
							<div class="span4">
							<?php echo $form->labelEx($peso,'observaciones'); ?>
							<?php echo $form->textArea($peso,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
							<?php echo $form->error($peso,'observaciones'); ?>
							</div>
						</div>
						<div class="row-fluid">
							<center><?php echo CHtml::submitButton($peso->isNewRecord ? 'Insertar' : 'Guardar', array('class' => 'btn btn-primary btn-large')); ?></center>
						</div>
						<?php $this->endWidget(); ?>