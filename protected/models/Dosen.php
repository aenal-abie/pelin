<?php

/**
 * This is the model class for table "tbl_dosen".
 *
 * The followings are the available columns in table 'tbl_dosen':
 * @property integer $user_id
 * @property string $tgl_lahir
 * @property integer $kode_nama_jurusan
 *
 * The followings are the available model relations:
 * @property NamaJurusan $kodeNamaJurusan
 * @property User $user
 * @property Group[] groups
 */
class Dosen extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_dosen';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, kode_nama_jurusan', 'required'),
            array('user_id, kode_nama_jurusan', 'numerical', 'integerOnly' => true),
            array('tgl_lahir', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('user_id, tgl_lahir,  kode_nama_jurusan', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'kodeNamaJurusan' => array(self::BELONGS_TO, 'NamaJurusan', 'kode_nama_jurusan'),
            'groups' => array(self::HAS_MANY, 'Group', 'user_id'),
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'user_id' => 'User',
            'tgl_lahir' => 'Tgl Lahir',
            'kode_nama_jurusan' => 'Kode Nama Jurusan',
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

        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('tgl_lahir', $this->tgl_lahir, true);
        $criteria->compare('kode_nama_jurusan', $this->kode_nama_jurusan);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Dosen the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function scopes() {
        return array(
            'login' => array(
                'condition' => 'user_id=' . Yii::app()->user->id,
                'limit' => 1,
            ),
        );
    }

}
