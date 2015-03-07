
<?php

$this->breadcrumbs = array(
    'Groups' => array('index'),
    'Create',
);
$this->beginWidget('ext.Box', array(
    'title' => 'Buat Group Belajar'));

//$this->menu = array(
//    array('label' => 'List Group', 'url' => array('index')),
//    array('label' => 'Manage Group', 'url' => array('admin')),
//);
?>

<?php $this->title = 'Group Belajar' ?>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>

<?php

$this->endWidget();

