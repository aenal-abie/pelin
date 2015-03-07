<?php
$this->breadcrumbs=array(
	'Pesertas',
);

$this->menu=array(
array('label'=>'Create Peserta','url'=>array('create')),
array('label'=>'Manage Peserta','url'=>array('admin')),
);
?>

<h1>Pesertas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
