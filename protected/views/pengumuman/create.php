<?php
$this->breadcrumbs=array(
	'Pengumumen'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Daftar Pengumuman','url'=>array('index')),
array('label'=>'Manajemen Pengumuman','url'=>array('admin')),
);
?>

<!--<h1>Create Pengumuman</h1>-->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>