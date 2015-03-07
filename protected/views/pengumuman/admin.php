<?php

$this->breadcrumbs = array(
    'Pengumumen' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Daftar Pengumuman', 'url' => array('index')),
    array('label' => 'Tamabah Pengumuman', 'url' => array('create')),
);
?>
<?php

$this->widget('booster.widgets.TbGridView', array(
    'id' => 'pengumuman-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'type' => 'bordered',
    'columns' => array(
        'judul',
        'tgl_post',
        array(
            'class' => 'booster.widgets.TbButtonColumn',
            'header' => 'Aksi'
        ),
    ),
));
?>
