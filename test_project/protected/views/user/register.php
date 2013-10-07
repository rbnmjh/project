<h2>Registration</h2>
<div class="form">
<?php
$form = $this->beginWidget('CActiveForm', array(
                'id'                     => 'login_form',
                'enableClientValidation' => true,
                'enableAjaxValidation'   => false, //turn on ajax validation on the client side
                'clientOptions'          => array(
                    'validateOnSubmit' => true,
                ),
                'htmlOptions'      => array(
                    //'onsubmit'   => '$("#login_form").validate();',
                    'onkeypress' => " if(event.keyCode == 13){ $('#login_form').submit(); } "
                ),
                    ));
            ?>
    <?php echo CHtml::errorSummary($user); ?>
    <div class="row">
        <?php echo $form->labelEx($user,'name'); ?>
        <?php echo $form->textField($user,'name') ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($user,'address'); ?>
        <?php echo $form->textField($user,'address') ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($user,'email'); ?>
        <?php echo $form->textField($user,'email') ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($user,'password'); ?>
        <?php echo $form->passwordField($user,'password') ?>
    </div>
    <div class="row submit">
        <?php echo CHtml::submitButton('Register'); ?>
    </div>
 
<?php $this->endWidget(); ?>
</div><!-- form -->