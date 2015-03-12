<?php
$this->breadcrumbs = array(
    'Materis' => array('index'),
    'Create',
);
$this->beginWidget('ext.Box', array(
    'title' => 'Daftar Group Aktif',
    'sectionClass' => '7',
));

//$this->menu=array(
//array('label'=>'Daftar Materi','url'=>array('index')),
////array('label'=>'Manage Materi','url'=>array('admin')),
//);
?>

<!--<h1>Create Materi</h1>-->

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>

<?php
$this->endWidget();
