<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\SiswaModel;


class SiswaController extends Controller
{
    // URL : .../index.php?r=siswa
    public function actionIndex()
    {
        return $this->render('index',['url'=>Yii::$app->request->absoluteUrl]);
    }

    public function actionView($id)
    {
        $model = new SiswaModel();

        $model->nisn = '12345678';
        $model->namaLengkap = 'Zaki Yazid';
        $model->jenisKelamin = SiswaModel::LAKI_LAKI;

        return $this->render('view', ['model' => $model, 'id' => $id]);
    }
}