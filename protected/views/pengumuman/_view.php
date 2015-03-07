<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
    <?php echo CHtml::decode($data->judul); ?>
    <br />

    <?php
    $this->beginWidget('ext.EReadMore', array(
        'linkUrl' => Yii::app()->createAbsoluteUrl('/site/read', array('id' => $data->id)),
        'linkText' => '<span class="fa fa-bullhorn"></span> Baca Selengkapnya..',
    ));
    ?>
    <?php echo $data->isi; ?>
    <?php $this->endWidget(); ?>

    
    <b><?php echo CHtml::encode($data->getAttributeLabel('header')); ?>:</b>
    <?php echo CHtml::encode($data->header); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('tgl_post')); ?>:</b>
    <?php echo CHtml::encode($data->tgl_post); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('oleh')); ?>:</b>
    <?php echo CHtml::encode($data->oleh); ?>
    <br />


</div>