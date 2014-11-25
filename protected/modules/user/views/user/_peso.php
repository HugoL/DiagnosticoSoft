	<?php $form=$this->beginWidget('CActiveForm', array(
							'id'=>'peso-form',
							// Please note: When you enable ajax validation, make sure the corresponding
							// controller action is handling ajax validation correctly.
							// There is a call to performAjaxValidation() commented in generated controller code.
							// See class documentation of CActiveForm for details on this.
							'enableAjaxValidation'=>false,
						)); ?>
							<div class="thumbnail">
							<div class="row-fluid span12">
							<div class="span3">&nbsp;</div>
							<div class="span1">
								<div class="control-group">			
									<?php echo $form->labelEx($peso,'peso'); ?>
									<div class="input-append"><?php echo $form->textField($peso,'peso',array('class' => 'span11')); ?>
										<?php echo $form->error($peso,'peso'); ?><span class="add-on"> kg</span>
									</div>
								</div>
							</div>
							<div class="span1">
								<?php echo $form->labelEx($peso,'fecha'); ?>
							<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                'name'=>'Peso[fecha]',
                                'id'=>'Peso_fecha',
                            	'value'=>date('Y-m-d'),
                                'options'=>array(
                                'showAnim'=>'fold',
                                ),
                                'htmlOptions'=>array(
                                'style'=>'height:20px;',
                                'class'=>'input-small',
                                ),
                        )); ?>
							</div>
							<div class="span3">
							<?php echo $form->labelEx($peso,'observaciones'); ?>
							<?php echo $form->textArea($peso,'observaciones',array('rows'=>3, 'cols'=>60)); ?>
							<?php echo $form->error($peso,'observaciones'); ?>
							</div>
							<div class="span3">
								<div class="control-group">
									<br/>
								<?php echo CHtml::submitButton($peso->isNewRecord ? 'Insertar' : 'Guardar', array('class' => 'btn btn-primary btn-large')); ?>
								</div>
							</div>
						</div>
						<div class="row-fluid">
							<center></center>
						</div>
					</div>
						<?php $this->endWidget(); ?>