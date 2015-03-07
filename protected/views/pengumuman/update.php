<?php
$this->breadcrumbs = array(
    'Pengumumen' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'Daftar Pengumuman', 'url' => array('index')),
    array('label' => 'Tambah Pengumuman', 'url' => array('create')),
    array('label' => 'Ubah Pengumuman', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Hapus Pengumuman', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manajemen Pengumuman', 'url' => array('admin')),
);
?>


        <!--<h1>Update Pengumuman <?php echo $model->id; ?></h1>-->

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>