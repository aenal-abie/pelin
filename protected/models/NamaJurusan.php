<?php

/**
 * This is the model class for table "tbl_nama_jurusan".
 *
 * The followings are the available columns in table 'tbl_nama_jurusan':
 * @property integer $kode_nama_jurusan
 * @property string $kode_jurusan
 * @property string $kode_jenjang
 * @property string $nama_jurusan
 * @property string $singkatan_jurusan
 * @property integer $kode_pengguna_add
 * @property string $tanggal_add
 * @property integer $kode_pengguna_edit
 * @property string $tanggal_edit
 *
 * The followings are the available model relations:
 * @property Dosen[] $dosens
 * @property Mahasiswa[] $mahasiswas
 * @property Jenjang $kodeJenjang
 * @property Jurusan $kodeJurusan
 */
class NamaJurusan extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_nama_jurusan';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('kode_jurusan, kode_jenjang, nama_jurusan, singkatan_jurusan, kode_pengguna_add, tanggal_add', 'required'),
            array('kode_pengguna_add, kode_pengguna_edit', 'numerical', 'integerOnly' => true),
            array('kode_jurusan', 'length', 'max' => 2),
            array('kode_jenjang', 'length', 'max' => 1),
            array('nama_jurusan', 'length', 'max' => 80),
            array('singkatan_jurusan', 'length', 'max' => 4),
            array('tanggal_edit', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('kode_nama_jurusan, kode_jurusan, kode_jenjang, nama_jurusan, singkatan_jurusan, kode_pengguna_add, tanggal_add, kode_pengguna_edit, tanggal_edit', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'dosens' => array(self::HAS_MANY, 'Dosen', 'kode_nama_jurusan'),
            'mahasiswas' => array(self::HAS_MANY, 'Mahasiswa', 'kode_nama_jurusan'),
            'kodeJenjang' => array(self::BELONGS_TO, 'Jenjang', 'kode_jenjang'),
            'kodeJurusan' => array(self::BELONGS_TO, 'Jurusan', 'kode_jurusan'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'kode_nama_jurusan' => 'Kode Nama Jurusan',
            'kode_jurusan' => 'Kode Jurusan',
            'kode_jenjang' => 'Kode Jenjang',
            'nama_jurusan' => 'Nama Jurusan',
            'singkatan_jurusan' => 'Singkatan Jurusan',
            'kode_pengguna_add' => 'Kode Pengguna Add',
            'tanggal_add' => 'Tanggal Add',
            'kode_pengguna_edit' => 'Kode Pengguna Edit',
            'tanggal_edit' => 'Tanggal Edit',
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

        $criteria->compare('kode_nama_jurusan', $this->kode_nama_jurusan);
        $criteria->compare('kode_jurusan', $this->kode_jurusan, true);
        $criteria->compare('kode_jenjang', $this->kode_jenjang, true);
        $criteria->compare('nama_jurusan', $this->nama_jurusan, true);
        $criteria->compare('singkatan_jurusan', $this->singkatan_jurusan, true);
        $criteria->compare('kode_pengguna_add', $this->kode_pengguna_add);
        $criteria->compare('tanggal_add', $this->tanggal_add, true);
        $criteria->compare('kode_pengguna_edit', $this->kode_pengguna_edit);
        $criteria->compare('tanggal_edit', $this->tanggal_edit, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return NamaJurusan the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getlistNamaJurusan() {
        return CHtml::listData($this->findAll(), 'kode_nama_jurusan', 'nama_jurusan');
    }

}
