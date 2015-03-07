<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'pengumuman-form',
    'enableAjaxValidation' => false,
        ));
?>

<!--<p class="help-block">Fields with <span class="required">*</span> are required.</p>-->

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldGroup($model, 'judul', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 255)))); ?>

<?php echo $form->ckEditorGroup($model, 'isi', array('widgetOptions' => array('htmlOptions' => array('rows' => 6, 'cols' => 50, 'class' => 'span8')))); ?>

<?php // echo $form->dropDownListGroup($model, 'header', array('widgetOptions' => array('data' => array("p" => "p", "w" => "w",), 'htmlOptions' => array('class' => 'input-large')))); ?>

<?php // echo $form->textFieldGroup($model, 'tgl_post', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>

<?php // echo $form->textFieldGroup($model, 'oleh', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>

<div class="form-actions">
    <?php
    $this->widget('booster.widgets.TbButton', array(
        'buttonType' => 'submit',
        'context' => 'primary',
        'label' => $model->isNewRecord ? 'Simpan Pengumuman ' : 'Simpan Perubahan',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
