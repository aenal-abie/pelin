<?php

/**
 * This is the model class for table "tbl_peserta".
 *
 * The followings are the available columns in table 'tbl_peserta':
 * @property integer $id
 * @property integer $group_id
 * @property integer $user_id
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Group $group
 * @property Mahasiswa $user
 */
class Peserta extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_peserta';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('group_id, user_id, status', 'required'),
            array('group_id, user_id', 'numerical', 'integerOnly' => true),
            array('status', 'length', 'max' => 1),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, group_id, user_id, status', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'group' => array(self::BELONGS_TO, 'Group', 'group_id'),
            'user' => array(self::BELONGS_TO, 'Mahasiswa', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'group_id' => 'Group',
            'user_id' => 'User',
            'status' => 'Status',
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
        $criteria->compare('group_id', $this->group_id);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('status', $this->status, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Peserta the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getPeserta($id) {
        $cr = new CDbCriteria();
        $cr->compare('group_id', $id, false);
        $cr->compare('status', 1, false);
        return $this->findAll($cr);
    }

    public function isPeserta($id_group) {
        $peserta = $this->find('group_id=:grp and user_id=:user', array(':grp' => $id_group, ':user' => Yii::app()->user->id));
//        print_r($peserta);
        return $peserta;
    }

    public function cekJumlahPendingPeserta() {
        return $this->with('group')->count('group.user_id=:user and t.status="0"', array(':user' => Yii::app()->user->id));
    }

    public function jmlGroup() {
        return $this->count('user_id=:id', array('id' => Yii::app()->user->id));
    }

    public function pesertaPending() {
        $this->with('group');
        return $this->findAll('t.user_id=:id and t.status="1"', array(':id' => Yii::app()->user->id));
    }

    public function totalPemberitahuanPendding() {
        $sql = '
        SELECT tbl_group.id,
        COUNT(tbl_peserta.id) as psr,
        tbl_group.nama_group
        FROM
        tbl_peserta
        INNER JOIN tbl_group ON tbl_peserta.group_id = tbl_group.id
        WHERE
        tbl_group.user_id =' . Yii::app()->user->id . '
        AND
        tbl_peserta.`status` = \'0\'
        GROUP BY tbl_group.id
            ';

        $connection = Yii::app()->db;
        $command = $connection->createCommand($sql);
        return $command->queryAll();
    }

}
