<section class="col-lg-8 connectedSortable">
    <style>
        .list-view{
            margin-top: -50px;
        }
		.box .box-body {
			margin-top: 0px;
		}
    </style>
    <?php
    $this->beginWidget('ext.Box', array(
        'title' => 'Materi Detail',
        'sectionClass' => '8',
    ));
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
    //
    //foreach ($dataProvider->getData() as $data) {
    //    $this->menu[] = array('label' => $data->materi, 'url' => array('view', 'id' => $data->id));
    //}
    //
    ////$this->menu = array(
    //$this->menu[] = array('label' => '<i class="fa fa-building-o"></i>Tambah Materi', 'url' => array('create'));
    ////    array('label' => 'Manage Materi', 'url' => array('admin')),
    ////);
    ?>

    <!--<button class="btn btn-warning btn-sm dropdown-toggle pull-right" >Bergabung <i class="glyphicon glyphicon-forward"></i></button>-->
    <br/>
    <?php
//    $this->widget('booster.widgets.TbListView', array(
//        'dataProvider' => $dataProvider,
//        'itemView' => 'view',
//    ));
    /* @var $this Controller */
    $this->renderPartial('view', ['datas' => $dataProvider]);

    $this->endWidget();
    ?>

</section>
<style>
.box .box-body {
margin-top: 0px;
}
</style>
<section class="col-lg-4 connectedSortable">
    <?php
    $this->beginWidget('ext.Box', array(
        'title' => 'Anggota Group',
        'sectionClass' => '8',
        'cssBody' => 'no-padding',
    ));


    //    $this->widget(
    //            'booster.widgets.TbMenu', array(
    //        'type' => 'list',
    //        'encodeLabel' => FALSE,
    //        'htmlOptions' => array('class' => 'sidebar-menu'),
    //        'items' => $this->menu
    //            )
    //    );
    $this->renderPartial('//group/_listAnggota', array('anggota' => $anggota));
    ?>

    <?php
    $this->endWidget();
    ?>

</section>