<?php

class PesertaController extends Controller {

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
    public function actionCreate($idGroup) {
        $ps = Peserta::model()->find('user_id=:id and group_id=:gr', array(':id' => Yii::app()->user->id,
            ':gr' => $idGroup));

        if (!is_object($ps)) {
            $model = new Peserta;

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            $Peserta = array();
            $Peserta['group_id'] = $idGroup;
            $Peserta['status'] = 0;
            $Peserta['user_id'] = Yii::app()->user->id;

            //        if (isset($_POST['Peserta'])) {
            //        $model->attributes = $_POST['Peserta'];
            $model->attributes = $Peserta;
            if ($model->save())
                $this->redirect(array('//materi/list', 'id' => $idGroup));
            //        }
            //        $this->render('create', array(
            //            'model' => $model,
            //        ));
        } else {
            $this->redirect(array('//materi/list', 'id' => $idGroup));
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Peserta'])) {
            $model->attributes = $_POST['Peserta'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
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
        $dataProvider = new CActiveDataProvider('Peserta');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Peserta('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Peserta']))
            $model->attributes = $_GET['Peserta'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function actionAprove($id) {
        try {
            $data = Peserta::model()->find('id=:id', array(':id' => $id));
            $group = $data->group_id;
            Peserta::model()->updateByPk($id, array('status' => '1'));
            $this->redirect(array('//materi/index', 'id' => $group));
        } catch (Exception $e) {
            Yii::app()->user->setFlash('error', "{$e->getMessage()}");
            //$this->refresh();
        }
    }

    public function actionReject($id) {
        try {
            $data = Peserta::model()->find('id=:id', array(':id' => $id));
            $group = $data->group_id;
            Peserta::model()->deleteByPk($id);
            $this->redirect(array('//materi/index', 'id' => $group));
        } catch (Exception $e) {
            Yii::app()->user->setFlash('error', "{$e->getMessage()}");
            //$this->refresh();
        }
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Peserta::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'peserta-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionProfileDosen($id) {
        $this->layout = '//layouts/column1';
        $user = User::model()->findByPk($id);
        /* cek Dosen */
        $dosen = Dosen::model()->findByPk($id);
        if (empty($dosen)) {
            $this->redirect(array('//'));
        }
        /* @var $user User */
        $this->title = 'Profile [' . $user->nama_lengkap . '][Dosen]';
        $groups = Group::model()->findAll('user_id=:id', [':id' => $id]);
        $this->render('profile_dosen', ['groups' => $groups, 'user' => $user]);
    }

    public function actionProfileMahasiswa($id) {
        $mahasiswa = Mahasiswa::model()->findByPk($id);
        if (empty($mahasiswa)) {
            $this->redirect(array('//'));
        }
        $this->layout = '//layouts/column1';
        $user = User::model()->findByPk($id);
        /* @var $user User */
        $this->title = 'Profile [' . $user->nama_lengkap . '][Mahasiswa]';
        $groups = Peserta::model()->findAll('user_id=:id', [':id' => $id]);
        $this->render('profile_mahasiswa', ['groups' => $groups, 'user' => $user]);
    }

}
