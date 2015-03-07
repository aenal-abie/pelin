<?php

class MateriController extends Controller {

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
            'rights', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    //    public function actionView($id) {
    //        $this->render('view', array(
    //            'model' => $this->loadModel($id),
    //        ));
    //    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($id = '0') {
        $model = new Materi;
        $this->layout = '//layouts/column2';
        //        $this->list_materi($id);
        $this->menu = Materi::model()->list_materi($id);
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $this->getNamaGroup($id);
        if (isset($_POST['Materi'])) {
            $model->attributes = $_POST['Materi'];
            $model->group_id = $id;
            if ($model->save()) {
                $messageType = 'success';
                $message = "<strong>Well done!</strong> You successfully create data ";
                Yii::app()->user->setFlash($messageType, $message);
                $this->redirect(array('index', 'id' => $model->group_id));
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
        $params['owner_id'] = $model->group->user_id;
        if (!Yii::app()->user->checkAccess('Pemilik', $params)) {
            $this->redirect(array('//group'));
        }

        $this->layout = '//layouts/column2';
        $model = $this->loadModel($id);
        $this->menu = Materi::model()->list_materi($model->group_id);
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Materi'])) {
            $model->attributes = $_POST['Materi'];
            if ($model->save())
                $messageType = 'success';
            $message = "<strong>Well done!</strong> You successfully update data ";
            Yii::app()->user->setFlash($messageType, $message);
            $this->redirect(array('index', 'id' => $model->group_id));
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
        //        if (Yii::app()->request->isPostRequest) {
        // we only allow deletion via POST request
        $mdl = $this->loadModel($id);
        $grp = $mdl->group_id;
        $params['owner_id'] = $mdl->group->user_id;
        if (!Yii::app()->user->checkAccess('Pemilik', $params)) {
            $this->redirect(array('//group'));
        }
        $messageType = 'success';
        $message = "<strong>Well done!</strong> You successfully delete data ";
        Yii::app()->user->setFlash($messageType, $message);
        $mdl->delete();
        $this->redirect(array('//materi/index', 'id' => $grp));

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        //            if (!isset($_GET['ajax']))
        //                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        //        } else
        //            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex($id) {
        $group = Group::model()->findByPk($id);
        $params['owner_id'] = $group->user_id;
        if (!Yii::app()->user->checkAccess('Pemilik', $params)) {
            $this->redirect(array('//group'));
        }

        $cr = new CDbCriteria();
        $cr->compare('group_id', $id, false);
        $this->getNamaGroup($id);
        //$dataProvider = new CActiveDataProvider('Materi', array('criteria' => $cr));
        $dataProvider=  Materi::model()->findAll($cr);
        $this->menu = Materi::model()->list_materi($id);

        $cr = new CDbCriteria();
        $cr->compare('group_id', $id, false);
        $cr->order = 'status asc';
        $anggota = Peserta::model()->findAll($cr);
        $this->render('index', array(
            'dataProvider' => $dataProvider, 'anggota' => $anggota
        ));
    }

    /**
     * Lists all data untuk guest dan mahasiswa.
     */
    public function actionList($id) {
        if (!Yii::app()->user->checkAccess('Mahasiswa') && (!Yii::app()->user->isGuest)) {
            $this->redirect(array('//group'));
        }
        $this->layout = '//layouts/column2n';
        $modelDikusi = new Diskusi();
        if (isset($_POST['Diskusi'])) {
            $modelDikusi->attributes = $_POST['Diskusi'];
            $modelDikusi->tgl_post = date('Y-m-d H:i:s');
            $modelDikusi->user_id = Yii::app()->user->id;
            $modelDikusi->group_id = $id;
            //print_r($modelDikusi);
            $modelDikusi->save();
            $modelDikusi->pesan = '';
        }
        $cr = new CDbCriteria();
        $cr->compare('id', $id, false);
        $this->getNamaGroup($id);
        $dataProvider = Group::model()->find($cr);
        $this->menu = Materi::model()->list_materi($id);
        $peserta = Peserta::model()->getPeserta($id);
        //cek peserta
        //        $cr = new CDbCriteria();
        //        $cr->compare('group_id', $id, false);
        //        $peserta = new CActiveDataProvider('Peserta', array(
        //            'pagination' => array(
        //                'pageSize' => 1,
        //            ),
        //            'criteria' => $cr
        //        ));
        $diskusi = Diskusi::model()->seleksi($id)->findAll();
        $this->render('list', array(
            'dataProvider' => $dataProvider, 'peserta' => $peserta,
            'diskusi' => $diskusi, 'id' => $id, 'model' => $modelDikusi
        ));
    }

    public function actionDetail($id, $group) {
        if (!Yii::app()->user->checkAccess('Mahasiswa') && (!Yii::app()->user->isGuest)) {
            $this->redirect(array('//group'));
        }
        $this->layout = '//layouts/column2n';
        $modelDikusi = new Diskusi();
        if (isset($_POST['Diskusi'])) {
            $modelDikusi->attributes = $_POST['Diskusi'];
            $modelDikusi->tgl_post = date('Y-m-d H:i:s');
            $modelDikusi->user_id = Yii::app()->user->id;
            $modelDikusi->group_id = $group;
            //             print_r($modelDikusi);
            $modelDikusi->save();
        }
        $cr = new CDbCriteria();
        $cr->compare('id', $id, false);
        //        $this->getNamaGroup($id);
        $dataProvider = Materi::model()->find($cr);
        $this->menu = Materi::model()->list_materi($group);
        //        $peserta = Peserta::model()->getPeserta($id);
        //data file
        $diskusi = Diskusi::model()->seleksi($group)->findAll();
        $tugas = Tugas::model()->findAll('materi_id=:id', array(':id' => $id));
        $fileList = File::model()->findAll('materi_id=:id', array(':id' => $id));
        $this->render('detail', array(
            'materi' => $dataProvider,
            'listFile' => $fileList, 'diskusi' => $diskusi, 'group' => $group, 'model' => $modelDikusi,
            'listTugas' => $tugas
        ));
    }

    public function actionDiskusi($id) {
        $model = Group::model()->findByPk($id);
        $params['owner_id'] = $model->user_id;
        if (!Yii::app()->user->checkAccess('Pemilik', $params)) {
            $this->redirect(array('//group'));
        }
        $modelDikusi = new Diskusi();
        if (isset($_POST['Diskusi'])) {
            $modelDikusi->attributes = $_POST['Diskusi'];
            $modelDikusi->tgl_post = date('Y-m-d H:i:s');
            $modelDikusi->user_id = Yii::app()->user->id;
            $modelDikusi->group_id = $id;
            //            print_r($modelDikusi);
            $modelDikusi->save();
            $modelDikusi->pesan = '';
        }
        $cr = new CDbCriteria();
        $cr->compare('group_id', $id, false);
        $this->getNamaGroup($id);
        $dataProvider = new CActiveDataProvider('Materi', array('criteria' => $cr));
        $this->menu = Materi::model()->list_materi($id);

        $cr = new CDbCriteria();
        $cr->compare('group_id', $id, false);
        $anggota = Peserta::model()->findAll($cr);
        $diskusi = Diskusi::model()->seleksi($id)->findAll();
        $this->render('diskusi', array('diskusi' => $diskusi,
            'dataProvider' => $dataProvider, 'anggota' => $anggota, 'model' => $modelDikusi
        ));
    }

    public function actionTugas($id) {
        $detail = Tugas::model()->find('id=:id', array(':id' => $id));

        if (!Yii::app()->user->checkAccess('Mahasiswa') && (!Yii::app()->user->isGuest)) {
            $this->redirect(array('//group'));
        } else {
            $peserta = Peserta::model()->find('group_id=:group_id and user_id=:user_id'
                    , array(':group_id' => $detail->materi->group_id, ':user_id' => Yii::app()->user->id));
            if (!is_object($peserta)) {
                $this->redirect(array('//'));
            }
        }
        $model = ListTugas::model()->find('user_id=:id and tugas_id=:tgs', array(':id' => Yii::app()->user->id,
            ':tgs' => $id));
        if (!is_object($model)) {
            $model = new ListTugas();
        }
        if (isset($_POST['ListTugas'])) {
            $fl = realpath(Yii::app()->basePath . '/../file/tugas/');
            $location = $fl . '/' . $id;
            if (!file_exists($location)) {
                mkdir($location);
                copy($fl . '/ic.php', $location . '/index.php');
            }
            $uploadFile = CUploadedFile::getInstance($model, 'filename');
            //            $model->attributes = $_POST['ListTugas'];
            if ($model->isNewRecord) {
                $model->user_id = Yii::app()->user->id;
                $model->tugas_id = $id;
                $model->filename = $uploadFile->getName();
                if ($model->save()) {
                    //                $this->redirect(array('//materi/tugas', 'id' => $id));
                    $file = realpath(Yii::app()->basePath . '/../file/tugas') . DIRECTORY_SEPARATOR . $id . DIRECTORY_SEPARATOR . Yii::app()->user->id . '-' . $uploadFile->getName();
                    $uploadFile->saveAs($file);
                    $model->filename = Yii::app()->user->id . '-' . $uploadFile->getName();
                    $model->save();
                }
            } else {
                $fileold = realpath(Yii::app()->basePath . '/../file/tugas') . DIRECTORY_SEPARATOR . $id . DIRECTORY_SEPARATOR . $model->filename;
                if (file_exists($fileold)) {
                    unlink($fileold);
                }

                $file = realpath(Yii::app()->basePath . '/../file/tugas') . DIRECTORY_SEPARATOR . $id . DIRECTORY_SEPARATOR . Yii::app()->user->id . '-' . $uploadFile->getName();
                $uploadFile->saveAs($file);
                //                $model->filename = $model->id . '-' . $uploadFile->getName();
                $model->updateByPk($model->id, array('filename' => Yii::app()->user->id . '-' . $uploadFile->getName()));
            }
        }
        $group = $detail->materi->group_id;
        $materi = $detail->materi_id;
        $this->layout = '//layouts/column2n';
        $modelDikusi = new Diskusi();
        $cr = new CDbCriteria();
        $cr->compare('id', $materi, false);
        //        $this->getNamaGroup($id);
        $dataProvider = Materi::model()->find($cr);
        $this->menu = Materi::model()->list_materi($group);
        //        $peserta = Peserta::model()->getPeserta($id);
        //data file
        //        $diskusi = Diskusi::model()->seleksi($group)->findAll();
        $tugas = Tugas::model()->findAll('materi_id=:id', array(':id' => $materi));
        $fileList = File::model()->findAll('materi_id=:id', array(':id' => $materi));
        $this->render('tugas', array(
            'materi' => $dataProvider,
            'tgs' => $model,
            'listFile' => $fileList, 'group' => $group, 'model' => $modelDikusi,
            'listTugas' => $tugas, 'dtl' => $detail
        ));
    }

    /**
     * Manages all models.
     */
    //    public function actionAdmin() {
    //        $model = new Materi('search');
    //        $model->unsetAttributes();  // clear any default values
    //        if (isset($_GET['Materi']))
    //            $model->attributes = $_GET['Materi'];
    //
    //        $this->render('admin', array(
    //            'model' => $model,
    //        ));
    //    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Materi::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'materi-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function getNamaGroup($id) {
        $data = Group::model()->findByPk($id);
        $this->title = "Nama Group ::" . $data->nama_group;
    }

}
