<style>
    .list-view{
        margin-top: -50px;
    }
</style>
<section class="col-lg-8 connectedSortable">
    <?php
    //    $this->beginWidget('ext.Box', array(
    //        'title' => 'Daftar Group Aktif',
    //        'sectionClass' => '7',
    //    ));
    ?>

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
    //        $this->widget('booster.widgets.TbListView', array(
    //            'dataProvider' => $dataProvider,
    //            'itemView' => 'view',
    //        ));
    //
    //        $this->endWidget();
    ?>

    <?php
    /* @var $data Group */
    $i = 0;
    foreach ($dataProvider as $data):
        ?>
        <div class="panel box box-success">



            <div class="box-header">
                <div class="pull-right" style="margin-top: 10px; margin-right: 5px;">
                    <?= CHtml::link('<i class="badge bg-yellow fa fa-pencil-square-o "> </i>', Yii::app()->createUrl('//group/update', array('id' => $data->id)), array('title' => 'Update')) ?>
                    <?= CHtml::link('<i class="badge bg-green  fa fa-building"> </i>', Yii::app()->createUrl('//materi/index', array('id' => $data->id)), array('title' => 'Lihat Materi')) ?>
                    <?=
                    CHtml::link('<i class="badge bg-red fa fa-trash-o"> </i>', '#', array('title' => 'Delete',
                        'onclick' => 'js:bootbox.confirm("<h3>Hapus Data </h3><br/>Anda Yakin Akan menghapus Group ini?",             
                            function(confirmed){
                        if(confirmed) {
                            window.location = "' . Yii::app()->createUrl('//group/delete', array('id' => $data->id)) . '";
                        }
             })'
                    ));
                    ?>
                </div>
                <h4 class="box-title">
                    <a title="Klik Untuk Detail" data-toggle="collapse" data-parent="#accordion" href="#collapse-ke<?= $data->id ?>" class="<?= ($i == 0) ? "collapsed" : "" ?>">
                        <?= $data->nama_group ?>
                    </a>
                </h4>
            </div>
            <div id="collapse-ke<?= $data->id ?>" class="panel-collapse collapse" style="height: 0px;">
                <div class="box-body">
                    <?= $data->diskripsi ?>
                    <?= CHtml::link('<span class="badge bg-yellow "><i class="fa fa-pencil-square-o "> </i> Ubah Group</span>', Yii::app()->createUrl('//group/update', array('id' => $data->id)), array('title' => 'Update')) ?>
                    <?= CHtml::link('<span class="badge bg-green "><i class=" fa fa-building"> </i> Materi Detail</span>', Yii::app()->createUrl('//materi/index', array('id' => $data->id)), array('title' => 'Lihat Materi')) ?>
                    <?=
                    CHtml::link('<span class="badge bg-red"><i class="fa fa-trash-o"></i>  Hapus Group</span>', '#', array('title' => 'Delete',
                        'onclick' => 'js:bootbox.confirm("<h3>Hapus Data </h3><br/>Anda Yakin Akan menghapus Group ini?",             
                            function(confirmed){
                        if(confirmed) {
                            window.location = "' . Yii::app()->createUrl('//group/delete', array('id' => $data->id)) . '";
                        }
             })'
                    ));
                    ?>
                </div>
            </div>
        </div>
        <?php
        $i++;
    endforeach;
    ?>
</section>


<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->




<section class="col-lg-4 connectedSortable">
    <?php
    $this->beginWidget('ext.Box', array(
        'title' => 'Group Anda',
        'cssBody' => 'no-padding',
        'sectionClass' => '5',));
    ?>
    <?php
    $this->widget(
            'booster.widgets.TbMenu', array(
        'type' => 'list',
        'encodeLabel' => FALSE,
        'htmlOptions' => array('class' => 'sidebar-menu'),
        'items' => $this->menu
            )
    );
    ?>
    <?php $this->endWidget(); ?>
</section>
