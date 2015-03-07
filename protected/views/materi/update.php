<?php

$this->breadcrumbs = array(
    'Materis' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->beginWidget('ext.Box', array(
    'title' => 'Daftar Group Aktif',
    'sectionClass' => '12',
));

//$this->menu = array(
//    array('label' => 'List Materi', 'url' => array('index')),
//    array('label' => 'Create Materi', 'url' => array('create')),
//    array('label' => 'View Materi', 'url' => array('view', 'id' => $model->id)),
//    array('label' => 'Manage Materi', 'url' => array('admin')),
//);
?>



<?php echo $this->renderPartial('_form', array('model' => $model)); ?>

<?php

$this->endWidget();
