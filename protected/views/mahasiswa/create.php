<?php
$this->breadcrumbs=array(
	'Mahasiswas'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Mahasiswa','url'=>array('index')),
array('label'=>'Manage Mahasiswa','url'=>array('admin')),
);
?>

<h1>Create Mahasiswa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>