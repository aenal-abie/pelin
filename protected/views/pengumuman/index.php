<?php
$this->breadcrumbs = array(
    'Pengumumen',
);

$this->menu = array(
    array('label' => 'Tambah Pengumuman', 'url' => array('create')),
    array('label' => 'Hapus Pengumuman', 'url' => array('admin')),
);
?>

<!--<h1>Pengumumen</h1>-->

<?php
$this->widget('booster.widgets.TbListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => 'view',
));
?>
