
<?php
$this->widget('bootstrap.widgets.TbAlert', array(
//    'block' => false, // display a larger alert block?
    'fade' => true, // use transitions?
    'closeText' => '&times;', // close link text - if set to false, no close link is displayed
    'alerts' => array(// configurations per alert type
        'success' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), //success, info, warning, error or danger
        'info' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), //success, info, warning, error or danger
        'warning' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), //success, info, warning, error or danger
        'error' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), //success, info, warning, error or danger
        'danger' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), //success, info, warning, error or danger
    ),
));
?>

<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'user-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    //'enableAjaxValidation'=>false,
    // 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
    'type' => 'horizontal'
        ));
?>


<?php echo $form->errorSummary($model); ?>
<?php echo $form->passwordFieldGroup($model, 'old_pass', array('class' => 'span5', 'maxlength' => 100)); ?>
<hr/>
<?php echo $form->passwordFieldGroup($model, 'new_pass', array('class' => 'span5', 'maxlength' => 100)); ?>
<?php echo $form->passwordFieldGroup($model, 'new_pass_repeat', array('class' => 'span5', 'maxlength' => 100)); ?>


<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
//        'type' => 'primary',
        'label' => 'Ubah Password Sekarang !!!',
        'icon' => 'fa fa-wrench',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
