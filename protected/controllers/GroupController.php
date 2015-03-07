<?php

class GroupController extends Controller {

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
            'rights'
//            'accessControl', // perform access control for CRUD operations
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
    public function actionCreate() {
        $this->menu = Group::model()->list_group();
        $model = new Group;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        $this->layout = '//layouts/column2';
        if (isset($_POST['Group'])) {
            $model->attributes = $_POST['Group'];
            if ($model->save())
                $messageType = 'success';
            $message = "<strong>Well done!</strong> You successfully create data ";
            Yii::app()->user->setFlash($messageType, $message);
            $this->redirect(array('index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view

      ' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $params['owner_id'] = $model->user_id;
        if (!Yii::app()->user->checkAccess('Pemilik', $params)) {
            $this->redirect(array('//group'));
        }

        $this->menu = Group::model()->list_group();
        $this->layout = '//layouts/column2';

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        if (isset($_POST['Group'])) {
            $model->attributes = $_POST['Group'];
            if ($model->save()) {
                $messageType = 'success';
                $message = "<strong>Well done!</strong> You successfully update data ";
                Yii::app()->user->setFlash($messageType, $message);
                $this->redirect(array('index'));
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
        //if (Yii::app()->request->isPostRequest) {
        $model = $this->loadModel($id);
        $params['owner_id'] = $model->user_id;
        if (!Yii::app()->user->checkAccess('Pemilik', $params)) {
            $this->redirect(array('//group'));
        }
        $messageType = 'success';
        $message = "<strong>Well done!</strong> You successfully delete data ";
        Yii::app()->user->setFlash($messageType, $message);
        $model->delete();
        // we only allow deletion via POST request
        //$this->redirect(array('index'));
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax'])) {
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] :
                            array('index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        //}
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $this->menu = Group::model()->list_group();
        $this->title = 'Daftar Group Anda';
        $cr = new CDbCriteria();
        $cr->compare('user_id', Yii::app()->user->id, false);
//        $dataProvider = new CActiveDataProvider('Group', array('pagination' => array(
//                'pageSize' => 3,
//            ), 'criteria' => $cr));
        $dataProvider = Group::model()->findAll($cr);
        $this->render('index', array(
            'dataProvider' => $dataProvider
        ));
    }

    /**
     * Manages all models.

      public function actionAdmin() {
      $model = new Group('search');
      $model->unsetAttributes();  // clear any default values
      if (isset($_GET['Group']))
      $model->attributes = $_GET['Group'];

      $this->render('admin', array(
      'model' =>
      $model,
      ));
      }
     */

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Group::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**

     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'group-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function list_group() {
        $dataProvider = new CActiveDataProvider('Group');
        foreach ($dataProvider->getData() as $data) {
            $this->menu[] = array('label' => $data->nama_group, 'url' => array('//materi/index', 'id' => $data->id));
        }
        $this->menu[] = array
            ('label' => '<i class="fa fa-users"></i> Tambah Group', 'url' => array('create'));
    }

}
