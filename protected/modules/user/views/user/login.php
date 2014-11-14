<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
?>

<div class="page-header">
	<center>
	<h1><img src="<?php echo Yii::app()->baseUrl ?>/images/logo.png" class="img-rounded" alt="Acceso restringido"><small> acceso a usuarios registrados</small></h1></center>
</div>

<div class="row-fluid">
	 <div class="span6 offset3">

<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>

<div class="hero-unit-orange">
<div class="form">
	<center>
<?php echo CHtml::beginForm(); ?>
	
	<?php echo CHtml::errorSummary($model); ?>
	
	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'username'); ?>
		<?php echo CHtml::activeTextField($model,'username') ?>
	</div>
	
	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'password'); ?>
		<?php echo CHtml::activePasswordField($model,'password') ?>
	</div>
	
	<div class="row rememberMe">
		<?php echo CHtml::activeCheckBox($model,'rememberMe'); ?><span> Recordarme más tarde</span>
		<?php //echo CHtml::activeLabelEx($model,'rememberMe'); ?> 
	</div>
	<br/>
	<div class="row submit">
		<?php echo CHtml::submitButton(UserModule::t("Login"), array('class'=>'btn btn-inverse btn-large')); ?>
	</div>
	<div class="row">
		<p class="hint"><small>
		<?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?></small>
		</p>
	</div>
	
<?php echo CHtml::endForm(); ?>
</center>
</div><!-- form -->
</div><!-- hero-unit -->

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
	</div><!-- offset3 -->
</div><!-- row-fluid -->