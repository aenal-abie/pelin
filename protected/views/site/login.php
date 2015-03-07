<section class="col-lg-5 connectedSortable">
    <?php
    /* @var $this SiteController */
    /* @var $model LoginForm */
    /* @var $form CActiveForm  */

    $this->pageTitle = Yii::app()->name . ' - Login';
    $this->breadcrumbs = array(
        'Login',
    );


    $this->beginWidget('ext.Box', array(
        'title' => 'Login User',
        'sectionClass' => '5'));
    ?>



    <div role="form" class="form">
        <?php
        $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>

        <?php echo $form->textFieldGroup($model, 'username', array('widgetOptions' => array('options' => array(), 'htmlOptions' => array('autocomplete' => 'off', 'class' => 'span5')), 'prepend' => '<i class="glyphicon fa fa-users"></i>')); ?>
        <?php echo $form->passwordFieldGroup($model, 'password', array('widgetOptions' => array('options' => array(), 'htmlOptions' => array('class' => 'span5')), 'prepend' => '<i class="glyphicon fa fa-key"></i>')); ?>
        <?php echo $form->checkboxGroup($model, 'rememberMe'); ?>

        <div class="form-actions">
            <?php
            $this->widget('booster.widgets.TbButton', array(
                'buttonType' => 'submit',
                'context' => 'primary',
                'icon' => 'fa fa-sign-in',
                'label' => 'Proses Login',
            ));
            ?>
        </div>


        <?php $this->endWidget(); ?>
        <?php $this->endWidget(); ?>
    </div><!-- form -->
</section>
<section class="col-lg-7 connectedSortable">
    <?php
    $this->renderPartial('//group/_listTable', array('sectionClass' => 7, 'list' => $data));
    ?>

</section>