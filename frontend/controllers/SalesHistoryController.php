<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class SalesHistoryController extends Controller
{
    public function actionQuarterly($year)
    {
        echo "<p>Ini URL: <strong>" .Yii::$app->request->absoluteUrl . "</strong></p>";
        echo "<p> Penjualan Q1 Tahun $year adalah... </p>";
        echo "<p> Penjualan Q2 Tahun $year adalah... </p>";
        echo "<p> Penjualan Q3 Tahun $year adalah... </p>";
        echo "<p> Penjualan Q4 Tahun $year adalah... </p>";
    }

}