<?php

/**
 * This is the model class for table "tbl_group".
 *
 * The followings are the available columns in table 'tbl_group':
 * @property integer $id
 * @property integer $user_id
 * @property string $nama_group
 * @property string $diskripsi
 * @property string $tgl_buat
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Dosen $user
 * @property Materi[] $materis
 * @property Peserta[] $pesertas
 */
class Group extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_group';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array(' nama_group, diskripsi', 'required'),
            array('id, user_id', 'numerical', 'integerOnly' => true),
            array('nama_group', 'length', 'max' => 100),
//            array('diskripsi', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, user_id, nama_group, diskripsi, tgl_buat', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user' => array(self::BELONGS_TO, 'Dosen', 'user_id'),
            'materis' => array(self::HAS_MANY, 'Materi', 'group_id'),
            'pesertas' => array(self::HAS_MANY, 'Peserta', 'group_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'user_id' => 'User',
            'nama_group' => 'Nama Group',
            'diskripsi' => 'Diskripsi',
            'tgl_buat' => 'Tanggal Pembuatan',
            'status' => 'Status Aktif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
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
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('nama_group', $this->nama_group, true);
        $criteria->compare('diskripsi', $this->diskripsi, true);
        $criteria->compare('tgl_buat', $this->tgl_buat, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Group the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function beforeSave() {
        if ($this->isNewRecord) {
            $this->tgl_buat = date('Y-m-d');
            $this->user_id = Yii::app()->user->id;
        }
        return parent::beforeSave();
    }

    public function list_group() {
        $cr = new CDbCriteria();
        $menu = array();
        if (Yii::app()->user->checkAccess('Dosen')) {
            $cr->compare('user_id', Yii::app()->user->id, false);
            $dataProvider = new CActiveDataProvider('Group', array('criteria' => $cr));

            foreach ($dataProvider->getData() as $data) {
                $menu[] = array('label' => '<i class="glyphicon glyphicon-link"></i> ' . $data->nama_group, 'url' => array('//materi/index', 'id' => $data->id));
            }
            $menu[] = array
                ('label' => '<i class="fa fa-users"></i> Tambah Group', 'visible' => Yii::app()->user->checkAccess('Dosen'), 'url' => array('create'));
        }

        return $menu;
    }

    public function jmlGroup() {
        return $this->count('user_id=:id', array('id' => Yii::app()->user->id));
    }

    public function scopes() {
        return array(
            'random' => array(
                'order' => 'RAND()',
                'limit' => 15,
            ),
            'new' => array(
                'order' => 'id DESC',
                'limit' => 7,
            ),
        );
    }

    public function terbaru() {
        $menu = array();
        $data = $this->new()->findAll();
        if (Yii::app()->user->checkAccess('Dosen')) {
            foreach ($data as $data) {
                $menu[] = array('label' => '<i class="glyphicon glyphicon-link"></i> ' . $data->nama_group, 'url' => array('//materi/index', 'id' => $data->id));
            }
        } else {
            foreach ($data as $data) {
                $menu[] = array('label' => '<i class="glyphicon glyphicon-link"></i> ' . $data->nama_group, 'url' => array('//materi/list', 'id' => $data->id));
            }
        }
        $menu[] = array
            ('label' => '<i class="fa fa-users"></i> Tambah Group', 'visible' => Yii::app()->user->checkAccess('Dosen'), 'url' => array('//group/create'));
        return $menu;
    }

}
