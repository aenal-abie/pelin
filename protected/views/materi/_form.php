<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'materi-form',
    'enableAjaxValidation' => false,
        ));
?>

<!--<p class="help-block">Fields with <span class="required">*</span> are required.</p>-->

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldGroup($model, 'materi', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 45)))); ?>

<?php // echo $form->textFieldGroup($model, 'diskripsi', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 45)))); ?>

<?php
echo $form->cKEditorGroup($model, 'diskripsi', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 45),
        'editorOptions' => array(
            'width' => '100%',
            //'height' => '600',
            'language' => 'id',
            'toolbar' => 'js:[
                      ["Source","DocProps","-","PasteText","PasteFromWord"],
                      ["Undo","Redo","-","RemoveFormat"],
                      ["Bold","Italic","Underline","Strike","Subscript","Superscript"],
                      ["NumberedList","BulletedList","-","Outdent","Indent"],
                      ["JustifyLeft","JustifyCenter","JustifyRight","JustifyBlock"],
                      ["Link","Unlink"],
                      ["Format","Font","FontSize","Styles"],
                      ["Maximize","ShowBlocks"],
                    ],'))));
?>


<?php // echo $form->textFieldGroup($model, 'group_id', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>

<div class="form-actions">
    <?php
    $this->widget('booster.widgets.TbButton', array(
        'buttonType' => 'submit',
        'context' => 'primary',
        'icon' => 'fa fa-building',
        'label' => $model->isNewRecord ? 'Simpan Data Baru' : 'Simpan Data Perubahan',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
