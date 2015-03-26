<?php

/**
 * This is the model class for table "tbl_tugas".
 *
 * The followings are the available columns in table 'tbl_tugas':
 * @property integer $id
 * @property integer $materi_id
 * @property string $judul
 * @property string $waktu_selesai
 * @property string $diskripsi
 * @property string $jenis
 * @property string $file_pendukung
 *
 * The followings are the available model relations:
 * @property Materi $materi
 */
class Tugas extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_tugas';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('materi_id, judul,waktu_selesai, diskripsi', 'required'),
            array('materi_id', 'numerical', 'integerOnly' => true),
            array('jenis', 'length', 'max' => 20),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, materi_id, waktu_selesai, diskripsi, jenis', 'safe', 'on' => 'search'),
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
            'waktu_selesai' => 'Waktu Selesai',
            'diskripsi' => 'Diskripsi',
            'jenis' => 'Jenis',
            'judul' => 'Title Tugas',
            'file_pendukung' => 'Upload File Pendukung (Max 5 MB)',
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
        $criteria->compare('waktu_selesai', $this->waktu_selesai, true);
        $criteria->compare('diskripsi', $this->diskripsi, true);
        $criteria->compare('jenis', $this->jenis, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Tugas the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function listTugas($id, $materi) {
        $cr = new CDbCriteria();
        $cr->compare('materi_id', $id);
        $dataProvider = $this->findAll($cr);
        $menu = array();
        foreach ($dataProvider as $data) {
            //            echo $pmateri = $data->materi->group_id;
            //            $fileSize = File::model()->formatSizeUnits(filesize(realpath(Yii::app()->basePath . '/../file/materi') . DIRECTORY_SEPARATOR . $data->file));
            //            $menu[] = array('label' => '<small class="pull-right badge bg-olive">' . $fileSize . '</small> <i class="glyphicon glyphicon-paperclip"></i>' . $data->file, 'url' => array('update', 'id' => $data->id, 'materi' => $materi));
            $menu[] = array('label' => '<i class="glyphicon glyphicon-briefcase"></i> ' . $data->judul, 'url' => array('//tugas/update', 'id' => $data->id, 'materi' => $materi));
        }

        //        $grup = new Materi();
        //        $grup->find('id=:id', array(':id' => $materi));
        //        print_r($grup);
        //        echo $id_group = $grup->group_id;
        //        $id_group = 1;
        //$this->menu = array(
        $menu[] = array('label' => '<i class = "glyphicon glyphicon-briefcase"></i> Tambah Tugas', 'url' => array('//tugas/create', 'id' => $id, 'materi' => $materi));
        $menu[] = array('label' => '<i class = "fa fa-building-o"></i> Daftar Materi', 'url' => array('//materi/index', 'id' => $materi));
        $menu[] = array('label' => '<i class="fa fa-users"></i> Daftar Group', 'url' => array('//group/index'));
        //    array('label' => 'Manage Materi', 'url' => array('admin')),
        //);
        return $menu;
    }

    public function getTotalTugas() {
        $sql = ' SELECT
        tbl_tugas.*
        FROM
        tbl_tugas
        INNER JOIN tbl_materi ON tbl_tugas.materi_id = tbl_materi.id
        INNER JOIN tbl_group ON tbl_materi.group_id = tbl_group.id
        where tbl_group.id in (select tbl_peserta.group_id from tbl_peserta where tbl_peserta.user_id = ' . Yii::app()->user->id . ')
        and tbl_tugas.waktu_selesai>"' . date('Y-m-d H:i:s') . '"';
        return $this->with('materi')->findAllBySql($sql);
    }

    public function getTotalKumpul() {
        $sql = ' 
        SELECT
        (SELECT count(tbl_list_tugas.id) FROM tbl_list_tugas WHERE tbl_list_tugas.tugas_id = tbl_tugas.id) AS tot_kumpul,
        (SELECT count(tbl_peserta.id) FROM tbl_peserta WHERE tbl_peserta.group_id = tbl_group.id) AS tot_peserta,
        tbl_tugas.id,
        tbl_tugas.judul,
        tbl_materi.materi,
        tbl_group.nama_group,
        tbl_tugas.materi_id
        FROM
        tbl_tugas
        INNER JOIN tbl_materi ON tbl_tugas.materi_id = tbl_materi.id
        INNER JOIN tbl_group ON tbl_materi.group_id = tbl_group.id 
        where tbl_group.user_id=' . Yii::app()->user->id . ' and tbl_tugas.waktu_selesai>"' . date('Y-m-d H:i:s') . '"';

        $connection = Yii::app()->db;
        $command = $connection->createCommand($sql);
        return $command->queryAll();
    }

}
