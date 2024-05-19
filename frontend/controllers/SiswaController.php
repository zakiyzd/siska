<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class SiswaController extends Controller
{
    // URL : .../index.php?r=siswa
    public function actionIndex()
    {
    echo "<p>ini URL: <strong>" . Yii::$app->request->absoluteUrl. "</strong></p>";
    echo "<p><strong>Ini adalah URL DEFAULT</strong></p>";
    }

    public function actionView($id)
    {
        echo "<p>Ini URL: <strong>" . Yii::$app->request->absoluteUrl. "</strong></p>";
        echo "<p>Siswa dengan no ID: <strong>$id</strong>";
    }
}