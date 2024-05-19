<?php

namespace frontend\controllers;

use yii;
use yii\web\Controller;

class SalesController extends Controller
{
    public function actionTotalSales()
    {
        echo "<p>Ini URL: <strong>" .Yii::$app->request->absoluteUrl . "</strong></p>";
    }
}