<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'user-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    //'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
    'type' => 'horizontal'
        ));
?>


<?php echo $form->errorSummary($model); ?>
<?php // echo $form->checkBoxGroup($model, 'jenis', array('class' => 'span5')); ?>
<?php // echo $form->textFieldGroup($model, 'username', array('class' => 'span5', 'maxlength' => 20)); ?>
<?php // $model->password = ''; ?>
<?php // echo $form->passwordFieldGroup($model, 'password', array('class' => 'span5', 'maxlength' => 100)); ?>
<?php // echo $form->passwordFieldGroup($model, 'password_repeat', array('class' => 'span5', 'maxlength' => 100)); ?>
<?php echo $form->textFieldGroup($model, 'nama_lengkap', array('widgetOptions' => array('class' => 'span5', 'maxlength' => 50))); ?>
<?php // echo $form->dropDownListRow($model, 'id_pribadi', Pribadi::model()->getOptions(), array('class' => 'span5', 'maxlength' => 20)); ?>
<?php // echo $form->textFieldGroup($model, 'email', array('class' => 'span5')); ?>
<?php // echo $form->datePickerGroup($model, 'tglLahir', array('widgetOptions' =>array())); ?>
<?php // $_level = array('1' => 'User', '2' => 'Admin'); ?>
<?php
//echo $form->dropDownListGroup($model, 'jurusan', array('widgetOptions' =>
//    array('data' => NamaJurusan::model()->getlistNamaJurusan(), 'class' => 'span5', 'style' => "width: 800px", 'placeholder' => 'Masukkan Email Anda', 'maxlength' => 50)));
?>
<?php echo $form->fileFieldGroup($model, 'avatar', array('class' => 'span5')); ?>


<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
//        'type' => 'primary',
        'label' => $model->isNewRecord ? ' Simpan Data Baru' : 'Setujui Perubahan Data !!!',
        'icon' => $model->isNewRecord ? 'icon-ok' : "icon-edit",
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
