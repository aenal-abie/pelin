<?php
$this->breadcrumbs = array(
    'Groups' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);


$this->beginWidget('ext.Box', array(
    'title' => 'Update Group'));


//$this->menu = array(
//    array('label' => 'List Group', 'url' => array('index')),
//    array('label' => 'Create Group', 'url' => array('create')),
//    array('label' => 'View Group', 'url' => array('view', 'id' => $model->id)),
//    array('label' => 'Manage Group', 'url' => array('admin')),
//);
?>

        <!--<h1>Update Group <?php echo $model->id; ?></h1>-->

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>
<?php
$this->endWidget();