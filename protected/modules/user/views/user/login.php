<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Login"),
);
?>

<h1><?php echo UserModule::t("Login"); ?></h1>

<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>

<p><?php echo UserModule::t("Please fill out the following form with your login credentials:"); ?></p>

<?php

    /** @var TbActiveForm $form */
    $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
    'id' => 'verticalForm',
    'htmlOptions' => array('class' => 'well'), // for inset effect
    )
    );
     
    echo $form->textFieldGroup($model, 'username');
    echo $form->passwordFieldGroup($model, 'password');
    echo $form->checkboxGroup($model, 'rememberMe');
    $this->widget(
    'booster.widgets.TbButton',
    array('buttonType' => 'submit', 'label' => 'Login')
    );
     
    $this->endWidget();
    unset($form);

?>