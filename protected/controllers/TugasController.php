<?php

class TugasController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

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
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($id, $materi) {
        $uniqe = Materi::model()->findByPk($id);
        $group = Group::model()->findByPk($uniqe->group_id);
        $params['owner_id'] = $group->user_id;
        if (!Yii::app()->user->checkAccess('Pemilik', $params)) {
            $this->redirect(array('//group'));
        }
        $model = new Tugas;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Tugas'])) {
            $model->attributes = $_POST['Tugas'];
            $model->materi_id = $id;
            $model->jenis = 'u';
            if ($model->save()) {
                $messageType = 'success';
                $message = "<strong>Well done!</strong> You successfully create data ";
                if (isset($_POST['Tugas'])) {
                    $uploadFile = CUploadedFile::getInstance($model, 'file_pendukung');
                    if (!empty($uploadFile)) {
                        $name = $uploadFile->getName();
                        $fl = realpath(Yii::app()->basePath . '/../file/pendukung/');
                        $location = $fl . '/' . $model->id;
                        if (!file_exists($location)) {
                            mkdir($location);
                            copy($fl . '/ic.php', $location . '/index.php');
                        }
                        $file = $location . DIRECTORY_SEPARATOR . $name;
                        if ($uploadFile->saveAs($file)) {
                            $model->file_pendukung = $name;
                            $model->save();
                            $message .= 'and file uploded';
                        } else {
                            $messageType = 'warning';
                            $message .= 'but file not uploded';
                        }
                    }
                    Yii::app()->user->setFlash($messageType, $message);
                    $this->redirect(array('//tugas/create', 'id' => $id, 'materi' => $materi));
                }
            }
        }
        $this->menu = Tugas::model()->listTugas($id, $materi);
        $this->menu_right = File::model()->listFile($id, $materi);
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
        $group = Group::model()->findByPk($model->materi->group_id);
        $params['owner_id'] = $group->user_id;
        if (!Yii::app()->user->checkAccess('Pemilik', $params)) {
            $this->redirect(array('//group'));
        }

        $this->layout = '//layouts/column2n';
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $materi = $model->materi_id;
        $group = $model->materi->group_id;
        if (isset($_POST['Tugas'])) {
            $model->attributes = $_POST['Tugas'];
            if ($model->save()) {
                $messageType = 'success';
                $message = "<strong>Well done!</strong> You successfully update data ";
                $uploadFile = CUploadedFile::getInstance($model, 'file_pendukung');
                if (!empty($uploadFile)) {
                    $name = $uploadFile->getName();
                    $fl = realpath(Yii::app()->basePath . '/../file/pendukung/');
                    $location = $fl . '/' . $model->id;
                    if (!file_exists($location)) {
                        mkdir($location);
                        copy($fl . '/ic.php', $location . '/index.php');
                    }
                    $file = $location . DIRECTORY_SEPARATOR . $name;
                    if ($uploadFile->saveAs($file)) {
                        $model->file_pendukung = $name;
                        $model->save();
                        $message .= 'and file uploded';
                    } else {
                        $messageType = 'warning';
                        $message .= 'but file not uploded';
                    }
                }
                Yii::app()->user->setFlash($messageType, $message);
                $this->redirect(array('//tugas/create', 'id' => $materi, 'materi' => $group));
            }
        }

        $uploadlistTugas = ListTugas::model()->findAll('tugas_id=:id', array(':id' => $id));

        $this->menu = Tugas::model()->listTugas($materi, $group);
        $this->render('update', array(
            'model' => $model, 'listTugas' => $uploadlistTugas
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
//        if (Yii::app()->request->isPostRequest) {
// we only allow deletion via POST request$materi = $model->materi_id;
        $model = $this->loadModel($id);
        $materi = $model->materi_id;
        $group = $model->materi->group_id;
        $this->loadModel($id)->delete();
        $this->redirect(array('//tugas/create', 'id' => $materi, 'materi' => $group));

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
//            if (!isset($_GET['ajax']))
//                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
//        } else
//            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Tugas');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Tugas('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Tugas']))
            $model->attributes = $_GET['Tugas'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Tugas::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tugas-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionDownload($id) {
        error_reporting(-1);
        Yii::import('ext.chip_download');
        $model = ListTugas::model()->find('id=:id', array(':id' => $id));
        //        print_r($model);


        $file = $model->filename;
        $download_path = realpath(Yii::app()->basePath . '/../file/tugas') . '/' . $model->tugas_id . '/';
        if (!file_exists($download_path . $file)) {
            $messageType = 'error';
            $message = "<strong>Not done!</strong> File not found";
            Yii::app()->user->setFlash($messageType, $message);
            $this->redirect(array('//materi/tugas', 'id' => $model->tugas_id));
        }
        $args = array(
            'download_path' => $download_path,
            'file' => $file,
            'extension_check' => false,
            'referrer_check' => FALSE,
            'referrer' => NULL,
        );
        try {
            $download = new chip_download($args);
            //            print_r($args);
            $download_hook = $download->get_download_hook();
            if ($download_hook['download'] == TRUE) {
                //              echo 'udah';
                /* You can write your logic before proceeding to download */

                /* Let's download file */
                //                $download->chip_print($download_hook);
                $download->get_download();
            }
        } catch (Exception $ex) {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

    public function actionDownloadFile($id) {
        error_reporting(-1);
        Yii::import('ext.chip_download');
        /* @var $model Tugas */
        $model = Tugas::model()->find('id=:id', array(':id' => $id));
        //        print_r($model);


        $file = $model->file_pendukung;
        $download_path = realpath(Yii::app()->basePath . '/../file/pendukung') . '/' . $model->id . '/';
        if (!file_exists($download_path . $file)) {
            $messageType = 'error';
            $message = "<strong>Not done!</strong> File not found";
            Yii::app()->user->setFlash($messageType, $message);
            $this->redirect(array('//materi/tugas', 'id' => $model->id));
        }
        $args = array(
            'download_path' => $download_path,
            'file' => $file,
            'extension_check' => false,
            'referrer_check' => FALSE,
            'referrer' => NULL,
        );
        try {
            $download = new chip_download($args);
            //            print_r($args);
            $download_hook = $download->get_download_hook();
            if ($download_hook['download'] == TRUE) {
                //              echo 'udah';
                /* You can write your logic before proceeding to download */

                /* Let's download file */
                //                $download->chip_print($download_hook);
                $download->get_download();
            }
        } catch (Exception $ex) {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

}
