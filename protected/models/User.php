<?php

//12#$asdf
//$2a$13$MHFv1Cux9m5hTZsEVo6Jq.Yi3qteHg7nvsz1yRulJj5pSgswvBB.W
//$2a$13$MHFv1Cux9m5hTZsEVo6Jq.Yi3qteHg7nvsz1yRulJj5pSgswvBB.W
//$2a$13$KNcKTMCaR8n970h3o34GOuwOWMZTzVYGT6QLD4b5yozYHX8XgO7UW
/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $saltPassword
 * @property string $joinDate
 * @property integer $status
 * @property string $email
 * @property integer $nama_lengkap
 * @property integer $user_add
 * @property string $date_add
 * @property string $active_key
 * @property integer $user_update
 * @property string $date_update
 * @property string $avatar
 *
 * The followings are the available model relations:
 * @property Level $level
 * @property Pribadi $idPribadi
 */
class User extends CActiveRecord {

    public $password_repeat;
    public $old_pass;
    public $new_pass;
    public $new_pass_repeat;
    public $reg = 0;
    public $verifyCode;
    public $jurusan;
    public $jenis;
    //public $avatar;
    public $tglLahir;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, email,nama_lengkap', 'required'),
            //array('level_id', 'numerical', 'integerOnly' => true),
            //array('username, id_pribadi', 'length', 'max' => 20),
            //array('password, saltPassword', 'length', 'max' => 50),
            array('jenis', 'required', 'on' => 'create'),
            array('password,password_repeat', 'required', 'on' => 'create'),
            array('password,password_repeat,jurusan', 'required', 'on' => 'register'),
            array('password', 'length', 'min' => 6),
            array('username,email', 'unique'),
            array('email', 'email'),
            array('password', 'compare', 'on' => 'register,create'),
            array('password_repeat', 'safe', 'on' => 'register,create'),
            array('username', 'length', 'min' => 10, "on" => "register"),
            array('username', 'length', 'max' => 10, "on" => "register"),
            array('username', 'numerical', 'integerOnly' => true, "on" => "register"),
            array('username', 'length', 'min' => 5, "on" => "create"),
            array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements(), "on" => "register"),
            // ($this->reg == 1) ? array('username', 'length', 'min' => 10) : array('username', 'length', 'min' => 4),
            // ($this->reg == 1) ? array('username', 'length', 'max' => 10) : array('username', 'length', 'max' => 50),
            // ($this->reg == 1) ? array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements()) : array('password', 'compare'),
            /*
              //Example username
              array('username', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u',
              'message'=>'Username can contain only alphanumeric
              characters and hyphens(-).'),
              array('username','unique'),
             */
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, username, password,jenis, saltPassword, id_pribadi, joinDate, level_id, avatar', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
                //'level' => array(self::BELONGS_TO, 'Level', 'level_id'),
                //'idAlumni' => array(self::BELONGS_TO, 'Alumni', 'id_alumni'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {

        switch ($this->scenario) {
            case 'register':
                return array(
                    'id' => 'ID',
                    'username' => 'NIM',
                    'password' => 'Password',
                    'joinDate' => 'Tanggal Buat',
                    'level_id' => 'Level',
                    'old_pass' => 'Password Sekarang',
                    'new_pass' => 'Password Baru',
                    'new_pass_repeat' => 'Ulangi Password Baru',
                    'verifyCode' => 'Kode Verifikasi',
                    'jurusan' => 'Pilih Jurusan',
                    'jenis' => 'Tandai Sebagai Dosen'
                );

            case 'create':
                return array(
                    'id' => 'ID',
                    'username' => 'Username',
                    'password' => 'Password',
                    'joinDate' => 'Tanggal Buat',
                    'level_id' => 'Level',
                    'old_pass' => 'Password Sekarang',
                    'new_pass' => 'Password Baru',
                    'new_pass_repeat' => 'Ulangi Password Baru',
                    'verifyCode' => 'Kode Verifikasi',
                    'jenis' => 'Tandai Sebagai Dosen'
                );
            case 'update':
                return array(
                    'id' => 'ID',
                    'username' => 'Username',
                    'password' => 'Password',
                    'joinDate' => 'Tanggal Buat',
                    'level_id' => 'Level',
                    'old_pass' => 'Password Sekarang',
                    'new_pass' => 'Password Baru',
                    'new_pass_repeat' => 'Ulangi Password Baru',
                    'verifyCode' => 'Kode Verifikasi',
                    'jenis' => 'Tandai Sebagai Dosen'
                );
            case 'profile' :
                return array(
                    'id' => 'ID',
                    'username' => 'Username',
                    'password' => 'Password',
                    'joinDate' => 'Tanggal Buat',
                    'level_id' => 'Level',
                    'old_pass' => 'Password Sekarang',
                    'new_pass' => 'Password Baru',
                    'new_pass_repeat' => 'Ulangi Password Baru',
                    'verifyCode' => 'Kode Verifikasi',
                    'avatar' => 'Pilih Gambar Untuk Profile Anda',
                    'tglLahir' => 'Tanggal Lahir'
                );
        }
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
        $criteria->compare('username', $this->username, true);
        $criteria->compare('nama_lengkap', $this->nama_lengkap, true);
        //$criteria->compare('saltPassword', $this->saltPassword, true);
        //$criteria->compare('id_pribadi', $this->id_pribadi, true);
        $criteria->compare('joinDate', $this->joinDate, true);
        $criteria->compare('status', $this->status, true);
        $criteria->order = "id desc";
        //$criteria->compare('level_id', $this->level_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function beforeSave() {
        $userId = 0;
        if (null != Yii::app()->user->id) {
            $userId = (int) Yii::app()->user->id;
        }

        if ($this->isNewRecord) {
            $this->password = $this->hashPassword($this->password);
            $this->user_add = $userId;
            $this->date_add = date('Y-m-d H:i:s');
        } else {
            if (!empty($this->password)) {
                $this->password = $this->hashPassword($this->password);
            }
            $this->user_update = $userId;
            $this->date_update = date('Y-m-d H:i:s');
        }

        return parent::beforeSave();
    }

    public function afterFind() {

        parent::afterFind();
    }

    /**
     * Checks if the given password is correct.
     * @param string the password to be validated
     * @return boolean whether the password is valid
     */
    public static function validatePassword($password, $hash) {
        return CPasswordHelper::verifyPassword($password, $hash);
    }

    /**
     * Generates the password hash.
     * @param string password
     * @return string hash
     */
    public static function hashPassword($password) {
        return CPasswordHelper::hashPassword($password);
    }

    public function defaultScope() {
        /*
          //Example Scope
          return array(
          'condition'=>"deleted IS NULL ",
          'order'=>'create_time DESC',
          'limit'=>5,
          );
         */
        $scope = array();


        return $scope;
    }

    public static function safeurl($v) {
        $v = strtolower($v);
        $v = preg_replace("/[^a-z0-9]+/", "Q", $v);
        $v = strtolower($v);
        return $v;
    }

    public static function KirimemailAktivasi($msg, $email) {
        $mailer = Yii::createComponent('application.extensions.widgets.mailer.EMailer');
        $mailer->IsSMTP();
        $mailer->IsHTML(true);
        $mailer->SMTPAuth = true;
        $mailer->SMTPSecure = "ssl";
        $mailer->Host = "smtp.gmail.com";
        $mailer->Port = 465;
        $mailer->Username = "aenal.abie@gmail.com";
        $mailer->Password = '4B13bcgoogle';
        $mailer->From = "IKA Alumni";
        $mailer->FromName = "IKA ALUMNI STMIK Bumigora";
        $mailer->AddAddress($email);
        $mailer->Subject = "IKA Alumni - Aktivasi Akun.";
        $mailer->Body = $msg;
        $mailer->Send();
        //if ($mailer->Send()) {
        //    echo "Message sent successfully!";
        //} else {
        //    echo "Fail to send your message!";
        //}
    }

    public function imgProfile($img = '', $nama = '', $i = 0) {

        $data = $this->find('id=:id', array('id' => Yii::app()->user->id));
        $img = $data->avatar;
        $nama = $data->nama_lengkap;
        $opt = array('class' => 'img-circle');

        if ($img == '') {
            return CHtml::image(Yii::app()->baseUrl . "/file/profile/avatar.png", $nama, $opt);
        } else {
            $Url = Yii::app()->baseUrl . "/file/profile/" . $img;
            $file = realpath(Yii::app()->basePath . '/../file/profile') . DIRECTORY_SEPARATOR . $img;
            if (file_exists($file)) {
                return CHtml::image($Url, $nama, $opt);
            } else {
                return CHtml::image(Yii::app()->baseUrl . "/file/profile/avatar.png", $nama, $opt);
            }
        }
    }

    public function imglist($img = '', $nama = '', $i = 1) {


        $opt = array('class' => 'img-circle', 'style' => 'width:45px; height:45px; margin:0 2px 2px 0;', 'title' => $nama);
        if ($i == 2) {
            //            array_merge($opt, array('class' => 'online'));
            $opt = array('class' => 'offline');
        }

        if ($img == '') {
            return CHtml::image(Yii::app()->baseUrl . "/file/profile/avatar.png", $nama, $opt);
        } else {
            $Url = Yii::app()->baseUrl . "/file/profile/" . $img;
            $file = realpath(Yii::app()->basePath . '/../file/profile') . DIRECTORY_SEPARATOR . $img;
            if (file_exists($file)) {
                return CHtml::image($Url, $nama, $opt);
            } else {
                return CHtml::image(Yii::app()->baseUrl . "/file/profile/avatar.png", $nama, $opt);
            }
        }
    }

    public static function imglProfile($img = '', $nama = '', $i = 1) {
        $opt = array('style' => 'width:200px; margin:0 2px 2px 0;', 'title' => $nama);
        if ($i == 2) {
            //            array_merge($opt, array('class' => 'online'));
            $opt = array('class' => 'offline');
        }

        if ($img == '') {
            return CHtml::image(Yii::app()->baseUrl . "/file/profile/avatar.png", $nama, $opt);
        } else {
            $Url = Yii::app()->baseUrl . "/file/profile/" . $img;
            $file = realpath(Yii::app()->basePath . '/../file/profile') . DIRECTORY_SEPARATOR . $img;
            if (file_exists($file)) {
                return CHtml::image($Url, $nama, $opt);
            } else {
                return CHtml::image(Yii::app()->baseUrl . "/file/profile/avatar.png", $nama, $opt);
            }
        }
    }

}
