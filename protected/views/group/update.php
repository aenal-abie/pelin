<?php
$this->breadcrumbs = array(
    'Groups' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);


//$this->menu = array(
//    array('label' => 'List Group', 'url' => array('index')),
//    array('label' => 'Create Group', 'url' => array('create')),
//    array('label' => 'View Group', 'url' => array('view', 'id' => $model->id)),
//    array('label' => 'Manage Group', 'url' => array('admin')),
//);
?>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>
<?php
