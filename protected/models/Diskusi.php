<?php

/**
 * This is the model class for table "tbl_diskusi".
 *
 * The followings are the available columns in table 'tbl_diskusi':
 * @property integer $id
 * @property string $pesan
 * @property integer $user_id
 * @property integer $group_id
 * @property string $tgl_post
 *
 * The followings are the available model relations:
 * @property Group $group
 * @property User $user
 */
class Diskusi extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_diskusi';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, group_id, tgl_post,pesan', 'required'),
            array('user_id, group_id', 'numerical', 'integerOnly' => true),
            array('pesan', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, pesan, user_id, group_id, tgl_post', 'safe', 'on' => 'search'),
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
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'pesan' => 'Pesan',
            'user_id' => 'User',
            'group_id' => 'Group',
            'tgl_post' => 'Tgl Post',
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
        $criteria->compare('pesan', $this->pesan, true);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('group_id', $this->group_id);
        $criteria->compare('tgl_post', $this->tgl_post, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Diskusi the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function seleksi($group) {
        $this->getDbCriteria()->compare(
                'group_id', $group, FALSE
        );
        return $this;
    }

}
