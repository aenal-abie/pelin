<?php

class UserController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
//            'accessControl', // perform access control for CRUD operations
//            'postOnly + delete', // we only allow deletion via POST request
            'rights - changeProfile'
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('changepass'),
                'users' => array('@'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'delete', 'admin', 'index', 'view', 'import', 'registrasi', 'active', 'changepass'),
            //'expression' => 'Yii::app()->session[\'level\']>1',
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'export', 'import', 'editable', 'toggle',),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionActive($id) {
        $mdl = User::model()->find('id=:id', array(':id' => $id));
        $nm = $mdl->username;
        $sts = $mdl->status;
        if ($sts == "N") {
            User::model()->updateByPk($id, array('status' => 'A'));
            //$mdl->save();
            Yii::app()->user->setFlash('success', 'User[' . $nm . '] sudah aktif');
            $this->redirect(array('index'));
        } else {
            User::model()->updateByPk($id, array('status' => 'N'));
            Yii::app()->user->setFlash('success', 'User[' . $nm . '] sudah nonaktif');
            $this->redirect(array('index'));
        }
    }

    public function actionChangepass() {
        $u = new User;
        $this->render('changepass', array(
            'model' => $u,
        ));
//        $u->validate();

        if (isset($_POST['User'])) {
            $user = User::model()->find('id=:id', array(':id' => Yii::app()->user->id));
            $id = $user->id;
//            $model = new User;
//            $model->attributes = $_POST['User'];
            $new = $_POST['User'];
            $oldpass = $new['old_pass'];
            $newpass = $new['new_pass'];
            $newpass_repeat = $new['new_pass_repeat'];
            $hash = $user->password;
            if (User::validatePassword($oldpass, $hash)) {
                if ($newpass == $newpass_repeat) {
                    if (strlen($newpass) > 5) {
                        User::model()->updateByPk($id, array('password' =>
                            User::model()->hashPassword($newpass), 'user_update' =>
                            Yii::app()->user->id, 'date_update' => date('Y-m-d H:i:s')));
                        Yii::app()->user->setFlash('success', 'Password anda sudah diperbaharui');
                    } else {
                        Yii::app()->user->setFlash('error', 'Password baru anda harus minimal 6 karakter');
                    }
                } else {
                    Yii::app()->user->setFlash('error', 'Password baru dan ulangi password baru tidak sama');
                }
                //$this->redirect(array('changepass'));
            } else {
                Yii::app()->user->setFlash('error', 'Password lama yang anda masukkan tidak sesuai');
                //$this->redirect(array('changepass'));
            }
            $this->refresh();
        }
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {

        if (isset($_GET['asModal'])) {
            $this->renderPartial('view', array(
                'model' => $this->loadModel($id),
            ));
        } else {

            $this->render('view', array(
                'model' => $this->loadModel($id),
            ));
        }
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'registarasi' page.
     */
    public function actionRegistrasi() {
        //echo date('H:i:s');
//        $data = Pribadi::model()->find('nama=:nama and tgl_lahir=:tgl', array(':nama' => 'Zaenal Abidin', ':tgl' => '1988-05-02'));
//        echo $id = $data->id;
        /* $model3 = new Pribadi;
          $model3->nama = "Zae";
          $model3->no_ktp='-';
          $model3->alamat='-';
          $model3->status='Tetap';
          $model3->tempat_lahir = '-';
          $model3->tgl_lahir = '2018-01-01';
          $model3->agama = '-';
          $model3->jkel = '-';
          $model3->tgl_mulai = date('Y-m-d');
          $model3->jenis = '1';
          $model3->kd_bagian = '1';
          $model3->save();
         */
        $model = new User;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['User'])) {
            if (!empty($_FILES)) {
                $tempFile = $_FILES['User']['tmp_name']['fileImport'];
                $fileTypes = array('xls', 'xlsx'); // File extensions
                $fileParts = pathinfo($_FILES['User']['name']['fileImport']);
                if (in_array(@$fileParts['extension'], $fileTypes)) {

                    Yii::import('ext.heart.excel.EHeartExcel', true);
                    EHeartExcel::init();
                    $inputFileType = PHPExcel_IOFactory::identify($tempFile);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($tempFile);
                    $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $baseRow = 2;
                    $inserted = 0;
                    $read_status = false;
                    while (!empty($sheetData[$baseRow]['A'])) {
                        $read_status = true;
                        //$id=  $sheetData[$baseRow]['A'];
                        $username = $sheetData[$baseRow]['B'];
                        $password = $sheetData[$baseRow]['C'];
                        //$saltPassword = $sheetData[$baseRow]['D'];
                        $id_pribadi = $sheetData[$baseRow]['D'];
                        //$joinDate = $sheetData[$baseRow]['F'];
                        $active = $sheetData[$baseRow]['H'];
                        #Data registrasi ke pribadi
                        if ($id_pribadi == "") {
                            $model3 = new Pribadi;
                            $nama = $sheetData[$baseRow]['E'];
                            $jenis1 = $sheetData[$baseRow]['F'];
                            ($jenis1 == 1) ? $jenis = 'dosen' : $jenis = "pegawai";
                            $tgl_lahir = $sheetData[$baseRow]['G'];
                            $kd_bagian = $sheetData[$baseRow]['I'];

                            $model3->nama = $nama;
                            $model3->no_ktp = '-';
                            $model3->alamat = '-';
                            $model3->status = 'Tetap';
                            $model3->tempat_lahir = '-';
                            $model3->tgl_lahir = $tgl_lahir;
                            $model3->agama = '-';
                            $model3->jkel = '-';
                            $model3->tgl_mulai = date('Y-m-d');
                            $model3->jenis = $jenis;
                            $model3->kd_bagian = $kd_bagian;
                            $model3->user_add = Yii::app()->user->id;
                            $model3->date_add = date('Y-m-d H:i:s');

                            if ($model3->save()) {
                                $data = Pribadi::model()->find('nama=:nama and tgl_lahir=:tgl', array(':nama' => $nama, ':tgl' => $tgl_lahir));
                                $id_pribadi = $data->id;
                            }
                        }

                        $model2 = new User;
                        //$model2->id=  $id;
                        $model2->username = $username;
                        $model2->password = $password;
                        $model2->password_repeat = $password;
                        //$model2->saltPassword = $saltPassword;
                        $model2->id_pribadi = $id_pribadi;
                        $model2->joinDate = date('Y-m-d H:i:s');
//                        $model2->level_id = 1;
                        $model2->user_add = Yii::app()->user->id;
                        $model2->date_add = date('Y-m-d H:i:s');

                        try {
                            if ($model2->save()) {
                                $inserted++;
                            }
                        } catch (Exception $e) {
                            Yii::app()->user->setFlash('error', "{$e->getMessage()}");
                            //$this->refresh();
                        }
                        $baseRow++;
                    }
                    Yii::app()->user->setFlash('success', ($inserted) . ' row inserted');
                } else {
                    Yii::app()->user->setFlash('warning', 'Type file salah (hanya mendukung xlsx, xls, and ods)');
                }
            }


            $this->render('registrasi', array(
                'model' => $model,
            ));
        } else {
            $this->render('registrasi', array(
                'model' => $model,
            ));
        }
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {

        $model = new User;
        $model->scenario = 'create';
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['User'])) {
            $transaction = Yii::app()->db->beginTransaction();
            try {

                $messageType = 'warning';
//                echo $model->jenis;
                $message = "There are some errors ";
                $model->attributes = $_POST['User'];
                //$uploadFile=CUploadedFile::getInstance($model,'filename');
                $model->joinDate = date('Y-m-d H:i:s');
                if ($model->save()) {
                    if ($model->jenis == '1') {
                        $model_dosen = new Dosen();
                        $model_dosen->user_id = $model->id;
                        $model_dosen->kode_nama_jurusan = $_POST['User']['jurusan'];
                        $model_dosen->save();
                        Rights::assign('Dosen', $model->id, NULL, 'N;');
                    }
                    $messageType = 'success';
                    $message = "<strong>Well done!</strong> You successfully create data ";
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
                    Yii::app()->user->setFlash($messageType, $message);
                    //                    $this->redirect(array('index'));
                }
            } catch (Exception $e) {
                $transaction->rollBack();
                Yii::app()->user->setFlash('error', "{$e->getMessage()}");
                //$this->refresh();
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {

        $model = $this->loadModel($id);
        $model->scenario = 'update';
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['User'])) {
            $messageType = 'warning';
            $message = "There are some errors ";
            $transaction = Yii::app()->db->beginTransaction();
//            echo $_POST['User']['jenis'];
//            print_r($_POST['User']);
            try {
                $model->attributes = $_POST['User'];
//                echo $model->jenis;
                $messageType = 'success';
                $message = "<strong>Well done!</strong> You successfully update data ";
                if ($model->jenis == 1) {
                    $m = new Dosen();
                    $m->user_id = $model->id;
                    $m->kode_nama_jurusan = $model->jurusan;
                    $m->save();
                }

                /*
                  $uploadFile=CUploadedFile::getInstance($model,'filename');
                  if(!empty($uploadFile)) {
                  $extUploadFile = substr($uploadFile, strrpos($uploadFile, '.')+1);
                  if(!empty($uploadFile)) {
                  if($uploadFile->saveAs(Yii::app()->basePath.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR.'user'.DIRECTORY_SEPARATOR.$model->id.DIRECTORY_SEPARATOR.$model->id.'.'.$extUploadFile)){
                  $model->filename=$model->id.'.'.$extUploadFile;
                  $message .= 'and file uploded';
                  }
                  else{
                  $messageType = 'warning';
                  $message .= 'but file not uploded';
                  }
                  }
                  }
                 */

                if ($model->save()) {
                    $transaction->commit();
                    Yii::app()->user->setFlash($messageType, $message);
                    $this->redirect(array('index'));
                }
            } catch (Exception $e) {
                $transaction->rollBack();
                Yii::app()->user->setFlash('error', "{$e->getMessage()}");
                // $this->refresh(); 
            }

//            $model->attributes = $_POST['User'];
//            if ($model->save())
////                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        /*
          $dataProvider=new CActiveDataProvider('User');
          $this->render('index',array(
          'dataProvider'=>$dataProvider,
          ));
         */

        $model = new User('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['User']))
            $model->attributes = $_GET['User'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
//    public function @actionAdmin() {
//
//        $model = new User('search');
//        $model->unsetAttributes();  // clear any default values
//        if (isset($_GET['User']))
//            $model->attributes = $_GET['User'];
//
//        $this->render('admin', array(
//            'model' => $model,
//        ));
//    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return User the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = User::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param User $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

//
//    public function @actionExport() {
//        $model = new User;
//        $model->unsetAttributes();  // clear any default values
//        if (isset($_POST['User']))
//            $model->attributes = $_POST['User'];
//
//        $exportType = $_POST['fileType'];
//        $this->widget('ext.heart.export.EHeartExport', array(
//            'title' => 'List of User',
//            'dataProvider' => $model->search(),
//            'filter' => $model,
//            'grid_mode' => 'export',
//            'exportType' => $exportType,
//            'columns' => array(
//                'id',
//                'username',
//                'password',
//                'saltPassword',
//                'id_pribadi',
//                'joinDate',
//                //'level_id',
//            ),
//        ));
//    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
//    public function @actionImport() {
//
//        $model = new User;
//        // Uncomment the following line if AJAX validation is needed
//        // $this->performAjaxValidation($model);
//
//        if (isset($_POST['User'])) {
//            if (!empty($_FILES)) {
//                $tempFile = $_FILES['User']['tmp_name']['fileImport'];
//                $fileTypes = array('xls', 'xlsx'); // File extensions
//                $fileParts = pathinfo($_FILES['User']['name']['fileImport']);
//                if (in_array(@$fileParts['extension'], $fileTypes)) {
//
//                    Yii::import('ext.heart.excel.EHeartExcel', true);
//                    EHeartExcel::init();
//                    $inputFileType = PHPExcel_IOFactory::identify($tempFile);
//                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
//                    $objPHPExcel = $objReader->load($tempFile);
//                    $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
//                    $baseRow = 2;
//                    $inserted = 0;
//                    $read_status = false;
//                    while (!empty($sheetData[$baseRow]['A'])) {
//                        $read_status = true;
//                        //$id=  $sheetData[$baseRow]['A'];
//                        $username = $sheetData[$baseRow]['B'];
//                        $password = $sheetData[$baseRow]['C'];
//                        $saltPassword = $sheetData[$baseRow]['D'];
//                        $id_pribadi = $sheetData[$baseRow]['E'];
//                        $joinDate = $sheetData[$baseRow]['F'];
//                        $level_id = $sheetData[$baseRow]['G'];
//
//                        $model2 = new User;
//                        //$model2->id=  $id;
//                        $model2->username = $username;
//                        $model2->password = $password;
//                        $model2->saltPassword = $saltPassword;
//                        $model2->id_pribadi = $id_pribadi;
//                        $model2->joinDate = $joinDate;
//                       // $model2->level_id = $level_id;
//
//                        try {
//                            if ($model2->save()) {
//                                $inserted++;
//                            }
//                        } catch (Exception $e) {
//                            Yii::app()->user->setFlash('error', "{$e->getMessage()}");
//                            //$this->refresh();
//                        }
//                        $baseRow++;
//                    }
//                    Yii::app()->user->setFlash('success', ($inserted) . ' row inserted');
//                } else {
//                    Yii::app()->user->setFlash('warning', 'Wrong file type (xlsx, xls, and ods only)');
//                }
//            }
//
//
//            $this->render('admin', array(
//                'model' => $model,
//            ));
//        } else {
//            $this->render('admin', array(
//                'model' => $model,
//            ));
//        }
//    }
//    public function @actionEditable() {
//        Yii::import('bootstrap.widgets.TbEditableSaver');
//        $es = new TbEditableSaver('User');
//        $es->update();
//    }

    public function actions() {
        return array(
            'toggle' => array(
                'class' => 'bootstrap.actions.TbToggleAction',
                'modelName' => 'User',
            )
        );
    }

    public function actionChangeProfile() {
        $this->layout = '//layouts/column2n';
        $id = Yii::app()->user->id;
        $model = $this->loadModel(Yii::app()->user->id);
        if (Yii::app()->user->checkAccess('Mahasiswa')) {
            $mdlMahasiswa = Mahasiswa::model()->find(Yii::app()->user->id);
        } elseif (Yii::app()->user->checkAccess('Dosen')) {
            $mdlDosen = Dosen::model()->find(Yii::app()->user->id);
        }
        $model->scenario = 'profile';
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
//            $model->materi_id = $id;
            $uploadFile = CUploadedFile::getInstance($model, 'avatar');
//            $name = $uploadFile->getName();
//            if ($model->save()) {

            $model->updateByPk($id, array('nama_lengkap' => $model->nama_lengkap,
                'email' => $model->email));
            if (!empty($uploadFile)) {
//                    $folder = $model->materi->group_id;
                $extUploadFile = substr($uploadFile, strrpos($uploadFile, '.') + 1);
                $file = realpath(Yii::app()->basePath . '/../file/profile') . DIRECTORY_SEPARATOR . $model->id . '.' . $extUploadFile;
                if ($uploadFile->saveAs($file)) {
                    $model->updateByPk($id, array(
                        'avatar' => $model->id . '.' . $extUploadFile)
                    );
                    Yii::app()->user->nama = $model->nama_lengkap;
//                    $dpn = split(' ', Yii::app()->user->nama);
                    $messageType = 'success';
                    $message = "<strong>Well done!</strong> You successfully create data ";
//                        $model->file = $name;
//                        $model->save();
//                    if (Yii::app()->user->checkAccess('Mahasiswa')) {
//                        $mdlMahasiswa = Mahasiswa::model()->find(Yii::app()->user->id);
//                        $mdlMahasiswa->updateByPk($id, array('photo' => $model->id . '.' . $extUploadFile));
//                    } elseif (Yii::app()->user->checkAccess('Dosen')) {
//                        $mdlDosen = Dosen::model()->find(Yii::app()->user->id);
//                        $mdlDosen->updateByPk($id, array('photo' => $model->id . '.' . $extUploadFile));
//                    }
                    $message .= 'and file uploded';
                } else {
                    $messageType = 'warning';
                    $message .= 'but file not uploded';
                }
//                }
//                $this->redirect(array('//user/changeProfile', 'id' => $id, 'materi' => $materi));
//                $this->refresh();
            } else {
                $model->updateByPk($id, array('nama_lengkap' => $model->nama_lengkap));
                Yii::app()->user->nama = $model->nama_lengkap;
            }
        }
        $this->render('profile', array('model' => $model));
    }

}
