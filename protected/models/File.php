<?php

/**
 * This is the model class for table "tbl_file".
 *
 * The followings are the available columns in table 'tbl_file':
 * @property integer $id
 * @property integer $materi_id
 * @property string $file
 *
 * The followings are the available model relations:
 * @property Materi $materi
 */
class File extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_file';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('materi_id', 'required'),
            array('materi_id', 'numerical', 'integerOnly' => true),
//            array('file', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, materi_id, file', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'materi' => array(self::BELONGS_TO, 'Materi', 'materi_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'materi_id' => 'Materi',
            'file' => 'File (<span style="color:red">Maximal 5 MB</span>)',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('materi_id', $this->materi_id);
        $criteria->compare('file', $this->file, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return File the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function formatSizeUnits($bytes) {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . ' bytes';
        } elseif ($bytes == 1) {
            $bytes = $bytes . ' byte';
        } else {
            $bytes = '0 bytes';
        }

        return $bytes;
    }

    public function listFile($id, $materi) {
        $cr = new CDbCriteria();
        $cr->compare('materi_id', $id);
        $dataProvider = new CActiveDataProvider('File', array('criteria' => $cr, 'pagination' => array('pageSize' => 20,)));
        $menu = array();
        foreach ($dataProvider->getData() as $data) {
//            echo $pmateri = $data->materi->group_id;
            $fileSize = '0';
            $file = realpath(Yii::app()->basePath . '/../file/materi') . DIRECTORY_SEPARATOR . $materi . DIRECTORY_SEPARATOR . $data->file;
            if (file_exists($file)) {
                $fileSize = File::model()->formatSizeUnits(filesize($file));
            }

            $menu[] = array('label' => '<small class="pull-right badge bg-olive">' . $fileSize . '</small> <i class="glyphicon glyphicon-paperclip"></i>  ' . $data->file, 'url' => array('//file/update', 'id' => $data->id, 'materi' => $materi));
        }

//        $grup = new Materi();
//        $grup->find('id=:id', array(':id' => $materi));
//        print_r($grup);
//        echo $id_group = $grup->group_id;
//        $id_group = 1;
        //$this->menu = array(
        $menu[] = array('label' => '<i class = "fa fa-upload"></i> Tambah File', 'url' => array('//file/create', 'id' => $id, 'materi' => $materi));
        $menu[] = array('label' => '<i class = "fa fa-building-o"></i> Daftar Materi', 'url' => array('//materi/index', 'id' => $materi));
        $menu[] = array('label' => '<i class="fa fa-users"></i> Daftar Group', 'url' => array('//group/index'));
        //    array('label' => 'Manage Materi', 'url' => array('admin')),
        //);
        return $menu;
    }

}
