
<?php

$this->breadcrumbs = array(
    'Groups' => array('index'),
    'Create',
);

//$this->menu = array(
//    array('label' => 'List Group', 'url' => array('index')),
//    array('label' => 'Manage Group', 'url' => array('admin')),
//);
?>

<?php $this->title = 'Tambah Group Belajar' ?>

<?=

$this->renderPartial('_form', array('model' => $model));
