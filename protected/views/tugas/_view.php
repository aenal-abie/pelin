<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materi_id')); ?>:</b>
	<?php echo CHtml::encode($data->materi_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->diskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis')); ?>:</b>
	<?php echo CHtml::encode($data->jenis); ?>
	<br />


</div>