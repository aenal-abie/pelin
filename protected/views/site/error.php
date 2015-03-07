<div class="col-md-12">
    <?php
    /* @var $this SiteController */
    /* @var $error array */

    $this->pageTitle = Yii::app()->name . ' - Error';
    $this->breadcrumbs = array(
        'Error',
    );


    $this->beginWidget('ext.Box', array(
        'title' => 'Kesalahan'));
    ?>


<!--<h2>Error <?php // echo $code;  ?></h2>-->

    <div class="error">
<?php echo CHtml::encode($message); ?>
    </div>

<?php $this->endWidget();
?>
</div>