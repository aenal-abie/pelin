<style>
    .list-view{
        margin-top: -50px;
    }
</style>

<?php
echo '<h3>' . $data->judul . '</h3>';
$this->beginWidget('ext.EReadMore', array(
    'linkUrl' => Yii::app()->createAbsoluteUrl('/site/read', array('id' => $data->id)),
    'linkText' => ' <p class="pull-right"><span class="fa fa-bullhorn"></span> Baca Selengkapnya..</p>',
));
?>

<?php echo $data->isi; ?>
<?php $this->endWidget(); ?>
<?php
//            $this->widget('application.extensions.widgets.SocialShareButton.SocialShareButton', array(
//                'style' => 'horizontal',
//                'networks' => array('googleplus', 'linkedin', 'twitter',),
//                'data_via' => '', //twitter username (for twitter only, if exists else leave empty)
//            ));
?>

<!--            <a class="pull-right btn btn-warning  fa fa-bullhorn" 
               href="<?php echo Yii::app()->createAbsoluteUrl('/site/read', array('id' => $data->id)); ?>"
               >Baca Detail... </a> -->

<hr/>
