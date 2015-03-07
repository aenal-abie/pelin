<?php
$this->breadcrumbs = array(
    'Pengumumen' => array('index'),
    $data->id,
);

$this->menu = array(
    array('label' => 'Daftar Pengumuman', 'url' => array('index')),
    array('label' => 'Tambah Pengumuman', 'url' => array('create')),
    array('label' => 'Ubah Pengumuman', 'url' => array('update', 'id' => $data->id)),
    array('label' => 'Hapus Pengumuman', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $data->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manajemen Pengumuman', 'url' => array('admin')),
);
?>

<!--<h1>View Pengumuman #<?php echo $data->id; ?></h1>-->

<?php
$this->widget('booster.widgets.TbDetailView', array(
    'data' => $data,
    'type' => 'bordered condensed striped',
    'attributes' => array(
//        'id',
        'judul',
//        'isi',
//        'header',
        'tgl_post',
//        'oleh',
    ),
));
?>
<br/>
