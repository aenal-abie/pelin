<?php

class FileController extends Controller {

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
            //            'accessControl', // perform access control for CRUD operations
            'rights'
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
        $model = new File;
        $mtr = Materi::model()->findByPk($id);
        $this->title = $mtr->materi . ' [' . $mtr->group->nama_group . ']';
        $this->menu_right = Tugas::model()->listTugas($id, $materi);
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['File'])) {
            $model->attributes = $_POST['File'];
            $model->materi_id = $id;
            $uploadFile = CUploadedFile::getInstance($model, 'file');
            $name = $uploadFile->getName();
            if ($model->save()) {
                if (!empty($uploadFile)) {
                    $messageType = 'success';
                    $message = "<strong>Well done!</strong> You successfully create data ";
                    $fl = realpath(Yii::app()->basePath . '/../file/materi/');
                    $location = $fl . '/' . $materi;
                    if (!file_exists($location)) {
                        mkdir($location);
                        copy($fl . '/ic.php', $location . '/index.php');
                    }

                    $file = $location . DIRECTORY_SEPARATOR . $name;
                    if ($uploadFile->saveAs($file)) {
                        $model->file = $name;
                        $model->save();
                        $message .= 'and file uploded';
                    } else {
                        $messageType = 'warning';
                        $message .= 'but file not uploded';
                    }
                }
                Yii::app()->user->setFlash($messageType, $message);
                $this->redirect(array('create', 'id' => $id, 'materi' => $materi));
            }
        }

        $this->menu = File::model()->listFile($id, $materi);
        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id, $materi) {
        $uniqe = File::model()->findByPk($id);
        $group = Group::model()->findByPk($uniqe->materi->group_id);
        $params['owner_id'] = $group->user_id;
        if (!Yii::app()->user->checkAccess('Pemilik', $params)) {
            $this->redirect(array('//group'));
        }
        $model = $this->loadModel($id);
        $this->title = $model->materi->materi . '[' . $model->materi->group->nama_group . ']';
        $file_materi = File::model()->find('id=:id', array(':id' => $id));
        $this->menu = File::model()->listFile($file_materi->materi_id, $materi);
        //        $this->listFile($materi, $materi);
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['File'])) {
            $uploadFile = CUploadedFile::getInstance($model, 'file');
            $name = $uploadFile->getName();
            if (!empty($uploadFile)) {
                $messageType = 'success';
                $message = "<strong>Well done!</strong> You successfully update data ";
                //$folder = $model->materi->group_id;
                $fl = realpath(Yii::app()->basePath . '/../file/materi/');
                $location = $fl . '/' . $materi;
                if (!file_exists($location)) {
                    mkdir($location);
                }
                $file = $location . DIRECTORY_SEPARATOR . $name;
                if ($uploadFile->saveAs($file)) {
                    $model->file = $name;
                    $model->save();
                    $message .= 'and file uploded';
                } else {
                    $messageType = 'warning';
                    $message .= 'but file not uploded';
                }

                Yii::app()->user->setFlash($messageType, $message);
                $this->redirect(array('create', 'id' => $file_materi->materi_id, 'materi' => $file_materi->materi->group_id));
            }
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
        $data = $this->loadModel($id);
        $materi = $data->materi_id;
        $group = $data->materi->group_id;

        $this->loadModel($id)->delete();
        $filename = realpath(Yii::app()->basePath . '/../file/materi') . DIRECTORY_SEPARATOR . $group . DIRECTORY_SEPARATOR . $data->file;
        unlink($filename);
        $messageType = 'success';
        $message = "<strong>Well done!</strong> You successfully delete data ";
        Yii::app()->user->setFlash($messageType, $message);
        $this->redirect(array('//file/create', 'id' => $materi, 'materi' => $group));

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
        $dataProvider = new CActiveDataProvider('File');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new File('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['File']))
            $model->attributes = $_GET['File'];

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
        $model = File::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'file-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id  the ID of the model to be loaded
     */
    public function actionDownload($id) {
        error_reporting(-1);
        Yii::import('ext.chip_download');
        $model = File::model()->find('id=:id', array(':id' => $id));

        //        print_r($model);
        $file = $model->file;
        $download_path = realpath(Yii::app()->basePath . '/../file/materi') . '/' . $model->materi->group_id . '/';
        if (!file_exists($download_path . $file)) {
            $messageType = 'error';
            $message = "<strong>Not done!</strong> File not found";
            Yii::app()->user->setFlash($messageType, $message);
            $this->redirect(array('//materi/detail', 'id' => $model->materi_id, 'group' => $model->materi->group_id));
        }
        $args = array(
            'download_path' => $download_path,
            'file' => $file,
            'extension_check' => TRUE,
            'referrer_check' => FALSE,
            'referrer' => NULL,
        );

        $download = new chip_download($args);
        //            print_r($args);
        $download_hook = $download->get_download_hook();
        if ($download_hook['download'] == TRUE) {
            //                echo 'udah';
            /* You can write your logic before proceeding to download */

            /* Let's download file */
            $download->get_download();
            //            $download->chip_print($download_hook);
        }
    }

}
