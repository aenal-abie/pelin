<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'group-form',
    'enableAjaxValidation' => false,
        ));
?>


<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldGroup($model, 'nama_group', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 100)))); ?>

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

<?php // echo $form->switchGroup($model, 'status'); ?>

<div class="form-actions">
    <?php
    $this->widget('booster.widgets.TbButton', array(
        'buttonType' => 'submit',
        'context' => 'primary',
        'icon' => $model->isNewRecord ? 'fa fa-users' : 'edit',
        'label' => $model->isNewRecord ? 'Tambah Group' : 'Ubah Group ini',
    ));
    ?>
</div>


<?php $this->endWidget(); ?>
