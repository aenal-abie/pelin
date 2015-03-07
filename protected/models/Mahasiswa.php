<?php

/**
 * This is the model class for table "tbl_mahasiswa".
 *
 * The followings are the available columns in table 'tbl_mahasiswa':
 * @property integer $user_id
 * @property integer $kode_nama_jurusan
 * @property string $tgl_lahir
 * @property string $photo
 *
 * The followings are the available model relations:
 * @property NamaJurusan $kodeNamaJurusan
 * @property User $user
 * @property Peserta[] $pesertas
 */
class Mahasiswa extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_mahasiswa';
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
            array('photo', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('user_id, kode_nama_jurusan, tgl_lahir, photo', 'safe', 'on' => 'search'),
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
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
            'pesertas' => array(self::HAS_MANY, 'Peserta', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'user_id' => 'User',
            'kode_nama_jurusan' => 'Kode Nama Jurusan',
            'tgl_lahir' => 'Tgl Lahir',
            'photo' => 'Photo',
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
        $criteria->compare('kode_nama_jurusan', $this->kode_nama_jurusan);
        $criteria->compare('tgl_lahir', $this->tgl_lahir, true);
        $criteria->compare('photo', $this->photo, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Mahasiswa the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}