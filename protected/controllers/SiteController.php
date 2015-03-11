<?php

class SiteController extends Controller {

    public $layout = '//layouts/column2n';

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
// captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
// They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        if (Yii::app()->user->checkAccess('Dosen')) {
            $this->redirect(array('//group/index'));
        }
        $this->menu = Group::model()->terbaru();
        $cr = new CDbCriteria();
        $cr->order = 'id desc';
// renders the view file 'protected/views/site/index.php'
// using the default layout 'protected/views/layouts/main.php'
        $dataProvider = new CActiveDataProvider('Pengumuman', array(
            'pagination' => array(
                'pageSize' => 3,
            ),
            'criteria' => $cr
        ));


        if (isset($_POST['seach'])) {
            $find = new CDbCriteria();
            $find->compare('nama_group', $_POST['t-find'], true);
            $data = Group::model()->findAll($find);
        } else {
            $data = Group::model()->random()->findAll();
        }


        $yourGroup = array();
        if (Yii::app()->user->checkAccess('Mahasiswa')) {
            $cr = new CDbCriteria();
            $cr->compare('user_id', Yii::app()->user->id, false);
            $yourGroup = Peserta::model()->findAll($cr);
        }

        $groupdataProvider = new CActiveDataProvider('Group');
        $this->render('index', array('data' => $dataProvider, 'group' => $groupdataProvider,
            'list' => $data, 'yourGroup' => $yourGroup));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;
        $this->menu = Group::model()->terbaru();
        $this->layout = '//layouts/column2n';
// if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

// collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
// validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }

        $data = Group::model()->random()->findAll();
// display the login form
        $this->render('login', array('model' => $model, 'data' => $data));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionRegister() {
        $this->menu = Group::model()->terbaru();
        $model = new User;
        $model->scenario = 'register';
        $model->reg = 1;
        $model->status = 'A';
        if (isset($_POST['User'])) {
            $transaction = Yii::app()->db->beginTransaction();
            try {
                $messageType = 'warning';
                $message = "There are some errors ";
                $model->attributes = $_POST['User'];
//$uploadFile=CUploadedFile::getInstance($model,'filename');
                $key = User::hashPassword($model->nama_lengkap);
                $model->active_key = User::safeurl($key);
                $model->joinDate = date('Y-m-d H:i:s');
                if ($model->save()) {
                    $model->password = '';
                    $model->password_repeat = '';
                    $mhs = new Mahasiswa();
                    $mhs->kode_nama_jurusan = $_POST['User']['jurusan'];
                    $mhs->user_id = $model->id;
                    $mhs->insert();
                    Rights::assign('Mahasiswa', $model->id, NULL, 'N;');
                    $messageType = 'success';
//$message = "<strong>Well done!</strong> Silahkan cek email anda untuk mengaktifkan user anda";
                    $message = "<strong>Well done!</strong> Silahkan Login untuk kegiatan pembelajaran lebih lanjut";
                    /*
                      $model2 = User::model()->findByPk($model->id);
                      if(!empty($uploadFile)) {
                      $extUploadFile = substr($uploadFile, strrpos($uploadFile, '.')+1);
                      if(!empty($uploadFile)) {
                      if($uploadFile->saveAs(Yii::app()->basePath.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR.'user'.DIRECTORY_SEPARATOR.$model2->id.DIRECTORY_SEPARATOR.$model2->id.'.'.$extUploadFile)){
                      $model2->filename=$model2->id.'.'.$extUploadFile;
                      $model2->save();
                      $message .= 'and file uploded';
                      }
                      else{
                      $messageType = 'warning';
                      $message .= 'but file not uploded';
                      }
                      }
                      }
                     */
                    $transaction->commit();
//                    $msg = 'Terima Kasih<br/>';
//                    $msg .= 'Silahkan activasi akun anda dengan mengakses URL berikut : <br/>';
//                    $link = '<a href="' . Yii::app()->createAbsoluteUrl('site/active', array('id' => $model->username,
//                                'key' => User::safeurl($key))) . '">Aktivasi</a>';
//                    $msg.=$link;
//                    User::KirimemailAktivasi($msg, $model->email);
                    Yii::app()->user->setFlash($messageType, $message);
                    $this->redirect(array('site/register'));
                }
            } catch (Exception $e) {
                $transaction->rollBack();
                Yii::app()->user->setFlash('error', "{$e->getMessage()}");
//$this->refresh();
            }
        }
        $data = Group::model()->random()->findAll();
        $this->render('register', array('model' => $model, 'data' => $data));
    }

    public function actionActive($id, $key) {
        $model = User::model()->find('username=:id and active_key=:key', array(":id" => $id,
            ':key' => $key));
        if (is_object($model)) {
//            print_r($model);
            $id = $model->id;
            User::model()->updateByPk($id, array('status' => 'A', 'active_key' => NULL));
            $messageType = 'success';
            Rights::assign('Alumni', $id, NULL, 'N;');
            $message = "<strong>Well done!</strong> Anda berhasil mengaktifkan user ";
            Yii::app()->user->setFlash('success', $message);
        } else {
            $message = "<strong>Error!</strong> Invalid Request";
            Yii::app()->user->setFlash('error', $message);
        }
        $this->render('active');
    }

    public function actionRead($id) {
        $criteria = new CDbCriteria(array(
            'condition' => 'id=' . $id,
        ));

        $info = Pengumuman::model()->find($criteria);

        $data = Group::model()->random()->findAll();
        $this->render('read', array('info' => $info, 'list' => $data,));
    }

    public function actionLupa() {
        $model = new Reset();
        $success = FALSE;
        $ketemu = 0;
        $this->menu = Group::model()->terbaru();
        $this->layout = '//layouts/column2n';
        // if it is ajax validation request
        if (isset($_POST['Reset'])) {
            $user = User::model()->find('email=:email', [':email' => $_POST['Reset']['email']]);
            if (is_object($user)) {
                /* @var $user User */
                $password = $this->generateRandomString(10);
                $user->password = $password;
                $user->save();
                User::KirimemailAktivasi('Password Baru Anda adalah : ' . $password, $user->email);
                $success = TRUE;
                $ketemu = 2;
            } else {
                $ketemu = 1;
            }
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }

        $data = Group::model()->random()->findAll();
        // display the login form
        $this->render('lupa', array('model' => $model, 'data' => $data, 'success' => $success, 'ketemu' => $ketemu));
    }

    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
