<?php
$this->breadcrumbs=array(
	'Diskusis'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Diskusi','url'=>array('index')),
array('label'=>'Manage Diskusi','url'=>array('admin')),
);
?>

<h1>Create Diskusi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>