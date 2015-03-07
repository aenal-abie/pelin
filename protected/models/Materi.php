<?php

/**
 * This is the model class for table "tbl_materi".
 *
 * The followings are the available columns in table 'tbl_materi':
 * @property integer $id
 * @property string $materi
 * @property string $diskripsi
 * @property integer $group_id
 *
 * The followings are the available model relations:
 * @property File[] $files
 * @property Group $group
 * @property Tugas[] $tugases
 */
class Materi extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_materi';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('group_id,materi,diskripsi', 'required'),
            array('group_id', 'numerical', 'integerOnly' => true),
//            array('materi, diskripsi', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, materi, diskripsi, group_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'files' => array(self::HAS_MANY, 'File', 'materi_id'),
            'group' => array(self::BELONGS_TO, 'Group', 'group_id'),
            'tugases' => array(self::HAS_MANY, 'Tugas', 'materi_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'materi' => 'Materi',
            'diskripsi' => 'Diskripsi',
            'group_id' => 'Group',
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
        $criteria->compare('materi', $this->materi, true);
        $criteria->compare('diskripsi', $this->diskripsi, true);
        $criteria->compare('group_id', $this->group_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Materi the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function list_materi($id) {
        $cr = new CDbCriteria();
        $cr->compare('group_id', $id);
//        $dataProvider = new CActiveDataProvider('Materi', array('criteria' => $cr));
        $dataProvider = $this->findAll($cr);
        $menu = array();
        if (Yii::app()->user->checkAccess('Dosen')) {
            foreach ($dataProvider as $data) {
//            echo $dataProvider->group->id;
                $menu[] = array('label' => '<i class="glyphicon glyphicon-tasks"></i> ' . $data->materi, 'url' => array('//file/create', 'id' => $data->id, 'materi' => $id));
            }
            //$this->menu = array(
            $menu[] = array('label' => '<i class="fa fa-building-o"></i> Tambah Materi', 'visible' => Yii::app()->user->checkAccess('Dosen'), 'url' => array('//materi/create', 'id' => $id));
            $menu[] = array('label' => '<i class="fa fa-building-o"></i> Daftar Materi', 'url' => array('//materi/index', 'id' => $id));
            $menu[] = array('label' => '<i class="fa fa-comments-o"></i> Panel Diskusi', 'url' => array('//materi/diskusi', 'id' => $id));
            $menu[] = array('label' => '<i class="fa fa-users"></i> Daftar Group', 'url' => array('//group/index'));
            //    array('label' => 'Manage Materi', 'url' => array('admin')),
            //);
        } elseif (Yii::app()->user->checkAccess('Mahasiswa') || Yii::app()->user->isGuest) {
            foreach ($dataProvider as $data) {
//            echo $dataProvider->group->id;
                $menu[] = array('label' => '<i class="glyphicon glyphicon-tasks"></i>' . $data->materi, 'url' => array('//materi/detail', 'id' => $data->id, 'group' => $id));
            }
        }



        return $menu;
    }

    public function cariMateri($id) {
//        $cr = new CDbCriteria();
//        $cr->compare('id', $id, false);
//        return $this->findB();
    }

}
