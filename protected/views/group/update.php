<?php
$this->breadcrumbs = array(
    'Groups' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

?>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>
<?php
