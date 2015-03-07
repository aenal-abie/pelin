
    <?php
    $this->beginWidget('ext.Box', array(
        'title' => 'Pengumuman/Informasi Pelin',
        'sectionClass' => '7'));

    $this->widget('bootstrap.widgets.TbListView', array(
        'dataProvider' => $data,
        'itemView' => '_read',
        'itemsTagName' => 'p',
        'tagName' => 'p',
        'pagerCssClass' => 'pagination pagination-sm no-margin pull-right',
        'template' => "{items}{pager}",
    ));
    ?>



    <?php
    $this->endWidget();
    ?>

