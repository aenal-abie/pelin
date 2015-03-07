
<style>
    .bootstrap-widget-content{
        //padding: 0px;
    }
    .items{
        line-height:2em;
    }
    .bootstrap-widget {
        margin-bottom: 0em; 
    }
    .btn {
        -webkit-border-radius: 0px; 
        border-radius: 0px; 

    }

    #alumni-grid{
        margin-top: -10px;
    }
</style>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/css/groupbtn.css" />

<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */
$menu = array();
require(dirname(__FILE__) . DIRECTORY_SEPARATOR . '_menu.php');
$this->menu = array(
    array('label' => 'Daftar User', 'url' => array('index'), 'icon' => 'fa fa-qrcode', 'items' => $menu)
);

?>


<?php /** $this->widget('bootstrap.widgets.TbListView',array(
  'dataProvider'=>$dataProvider,
  'itemView'=>'_view',
  )); * */ ?>

<p >
    Anda juga bisa memasukan operator pencarian (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>) pada bagian awal kata kunci ketika mencari data.
</p>

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'user-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'type' => 'striped hover bordered condensed',
    'columns' => array(
        array('header' => 'No', 'value' => '($this->grid->dataProvider->pagination->currentPage*
					 $this->grid->dataProvider->pagination->pageSize
					)+
					array_search($data,$this->grid->dataProvider->getData())+1',
            'htmlOptions' => array('style' => 'width: 25px; text-align:center;'),
        ),
        array(
            'name' => 'username',
            'value' => '($data->username)',
            'headerHtmlOptions' => array('style' => 'text-align:center;'),
        ),
        'nama_lengkap',
        //'password',
        /* array(
          'name' => 'saltPassword',
          'value' => '($data->saltPassword)',
          'headerHtmlOptions' => array('style' => 'text-align:center;'),
          ), */
//        array(
//            'name' => 'id_alumni',
//            'value' => '($data->idAlumni->nama_alumni)',
//            'headerHtmlOptions' => array('style' => 'text-align:center;'),
//        ),
        array(
            'name' => 'joinDate',
            'value' => 'Controller::tgl_id($data->joinDate)',
            'headerHtmlOptions' => array('style' => 'text-align:center;'),
        ),
//        array(
//            'name' => 'level_id',
//            'value' => '($data->level_id==1)?"User":"Admin"',
//            'headerHtmlOptions' => array('style' => 'text-align:center;'),
//            'filter' => CHtml::activeDropDownList($model, 'level_id', array(''=>'Pilih','1'=>'User','2'=>'Admin'))
//        ),
        array(
            'name' => 'status',
            'value' => '($data->status=="A")?"Aktive":"Non Aktive"',
            'headerHtmlOptions' => array('style' => 'text-align:center;'),
            'filter' => CHtml::activeDropDownList($model, 'status', array('' => 'Pilih', 'A' => 'Aktif', 'N' => 'Non Aktif'))
        ),
        /*
          //Contoh
          array(
          'header' => 'Level',
          'name'=> 'ref_level_id',
          'type'=>'raw',
          'value' => '($data->Level->name)',
          // 'value' => '($data->status)?"on":"off"',
          // 'value' => '@Admin::model()->findByPk($data->createdBy)->username',
          ),
         */
        array(
            'class' => 'booster.widgets.TbButtonColumn',
            'template' => '{update} {delete} {view}',
            'buttons' => array
                (
                'view' => array
                    (
                    'label' => 'Active/Non Aktive',
                    'icon' => 'lock',
                    'url' => 'Yii::app()->createUrl("/user/active", array("id"=>$data->id))',
                ),
            ),
        ),
    ),
));
?>


