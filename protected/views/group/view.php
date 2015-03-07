
<?php
$this->widget('booster.widgets.TbDetailView', array(
    'data' => $data,
    'type' => 'bordered condensed striped',
    'attributes' => array(
        'nama_group',
        array(
            'name' => 'diskripsi',
            'type' => 'raw'
        ),
        'tgl_buat',
        array(
            'label' => 'Aksi::',
            'type' => 'raw',
            'value' => CHtml::link('<i class="badge bg-yellow fa fa-2x fa-pencil-square-o "> </i>', Yii::app()->createUrl('//group/update', array('id' => $data->id)), array('title' => 'Update')
            ) . ""
            . " " . CHtml::link('<i class="badge bg-green fa fa-2x fa-building"> </i>', Yii::app()->createUrl('//materi/index', array('id' => $data->id)), array('title' => 'Lihat Materi'))
            . " " . CHtml::link('<i class="badge bg-red fa fa-2x fa-trash-o"> </i>', '#', array('title' => 'Delete',
                'onclick' => 'js:bootbox.confirm("<h3>Hapus Data </h3><br/>Anda Yakin Akan menghapus Group ini?",             
                            function(confirmed){
                        if(confirmed) {
                            window.location = "' . Yii::app()->createUrl('//group/delete', array('id' => $data->id)) . '";
                        }
             })'
            )),
))));
?>
<br/>
