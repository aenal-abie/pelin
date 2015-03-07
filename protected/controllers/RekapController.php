<?php

class RekapController extends Controller {

    public function actionIndex() {

        $data = Dosen::model()->findAll();

        $this->render('index', ['data' => $data]);
    }

    public function actionCetak() {
        $data = Dosen::model()->findAll();
        $mPDF1 = Yii::app()->ePdf->mpdf();
        # You can easily override default constructor's params
        $mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');
        $mPDF1->WriteHTML($this->renderPartial('index', ['data' => $data], true));
        $mPDF1->Output();
    }

}
