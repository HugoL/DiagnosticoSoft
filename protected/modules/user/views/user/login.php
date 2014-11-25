<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
?>
<div class="container">
	<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>
	<div class="login-container">
            <div id="output"></div>
            <div class="avatar"><img src="<?php echo Yii::app()->baseUrl ?>/images/logo.png" class="img-rounded" alt="Acceso restringido"></div>
            <div class="form-box">
                <?php echo CHtml::beginForm(); ?>
	
	<?php echo CHtml::errorSummary($model); ?>
	
	
		<?php echo CHtml::activeTextField($model,'username',array('placeholder' => 'Usuario')) ?>
	
		<?php echo CHtml::activePasswordField($model,'password',array('placeholder' => 'Contraseña')) ?>
	
		<div class="rememberme"><?php echo CHtml::activeCheckBox($model,'rememberMe'); ?><span> Recordarme más tarde</span>
		<?php //echo CHtml::activeLabelEx($model,'rememberMe'); ?> </div>

		<div class="rememberMe">
		<?php echo CHtml::submitButton(UserModule::t("Login"), array('class'=>'btn btn-info login')); ?>
		<p class="hint"><small>

		<?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?></small>
		</p>
		</div>
	
<?php echo CHtml::endForm(); ?>
            </div>
        </div>
        
</div>
</div>


<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>