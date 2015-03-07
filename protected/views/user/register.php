
<style>
    .bootstrap-widget-content{
        //padding: 0px;
    }
    .items{
        line-height:2em;
    }
    .bootstrap-widget {
        margin-bottom: 0em; 
    }
    .btn {
        -webkit-border-radius: 0px; 
        border-radius: 0px; 

    }

    #alumni-grid{
        margin-top: -10px;
    }
</style>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/css/groupbtn.css" />

<style>
    .alert {
        padding-left: 30px;
        margin-left: 15px;
        position: relative;
        border-radius: 50px;
    }
</style>
<?php
$this->beginWidget(
        'bootstrap.widgets.TbBox', array(
    'title' => 'Halaman Register Untuk Alumni',
    'headerIcon' => 'icon- fa fa-th-large',
    //'htmlOptions' => array('style' => ' padding: 0; '),
    'headerButtons' => array(
        array(
            'class' => 'bootstrap.widgets.TbButtonGroup',
            'type' => 'success',
        // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
//                    'buttons' => $this->menu
        )
    )
        )
);
//        echo $p_model->isi;
?>
<?php
$this->widget('bootstrap.widgets.TbAlert', array(
    'block' => false, // display a larger alert block?
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
<div class="span11">
    <div class="box box-primary">
        <div class="box-header" style="padding-bottom: 0px;">
            <?php if (Yii::app()->user->isGuest) : ?>
                <h3 style="padding: 5px 0px 0px 10px;" class="box-title"><i class="icon- fa fa-user"></i> Register:: Alumni</h3>
                <div class="box-tools pull-right">
                    <div class="label bg-aqua">Alumni</div>
                </div>
            <?php else: ?>
                <h3 style="padding: 5px 0px 0px 10px;" class="box-title"><i class="icon- fa fa-user"> </i> Anda di Halaman User </h3>
            <?php endif; ?>

        </div>

        <div class="box-body">
            <?php if (Yii::app()->user->isGuest) : ?>

                <?php
                $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                    'id' => 'user-form',
                    // Please note: When you enable ajax validation, make sure the corresponding
                    // controller action is handling ajax validation correctly.
                    // There is a call to performAjaxValidation() commented in generated controller code.
                    // See class documentation of CActiveForm for details on this.
                    //'enableAjaxValidation'=>false,
                    'htmlOptions' => array('class' => 'login'),
                    'type' => 'horizontal'
                ));
                ?>


                <?php echo $form->errorSummary($model); ?>

                <?php echo $form->textField($model, 'username', array('class' => 'span5', 'style' => "width: 800px", 'maxlength' => 10, 'placeholder' => 'Nomor Induk Mahasiswa [NIM]')); ?>
                <?php echo $form->passwordField($model, 'password', array('class' => 'span5', 'style' => "width: 800px", 'placeholder' => 'Password', 'maxlength' => 100)); ?>
                <?php echo $form->passwordField($model, 'password_repeat', array('class' => 'span5', 'style' => "width: 800px", 'placeholder' => 'Ulangi Password', 'maxlength' => 100)); ?>
                <?php echo $form->textField($model, 'nama_lengkap', array('class' => 'span5', 'style' => "width: 800px", 'placeholder' => 'Nama Lengkap Anda', 'maxlength' => 50)); ?>
                <?php echo $form->textField($model, 'email', array('class' => 'span5', 'style' => "width: 800px", 'placeholder' => 'Masukkan Email Anda', 'maxlength' => 50)); ?>
                <?php // echo $form->dropDownListRow($model, 'id_pribadi', Pribadi::model()->getOptions(), array('class' => 'span5', 'maxlength' => 20)); ?>
                <?php //echo $form->textFieldRow($model, 'joinDate', array('class' => 'span5')); ?>
                <?php // $_level = array('1' => 'User', '2' => 'Admin'); ?>
                <?php //echo $form->dropDownListRow($model, 'level_id', $_level, array('class' => 'span5')); ?>
                <!--</form>-->
                <div class="span11">
                    <div>
                        <?php $this->widget('CCaptcha'); ?>
                        <?php echo $form->textField($model, 'verifyCode'); ?>
                    </div>
                    <label class="hint">Masukkan huruf seperti yang tertera pada gambar di atas.
                        <br/>Huruf tidak case-sensitive.</label>
                </div>
                <input style="margin-left: 10px"  type="submit" name="send" id="send" value="Register Alumni">

                <?php $this->endWidget(); ?>
            <?php else : ?>

                <div class="box-tools pull-right">
                    <?php
                    echo CHtml::link('<span class="fa fa-sign-in"></span> Logout', Yii::app()->createUrl('site/logout'));
                    ?>
                </div>
                <?php echo Yii::app()->user->nama ?>
            <?php endif; ?>
        </div><!-- /.box-body -->
    </div>
</div>

<?php
$this->endWidget();
