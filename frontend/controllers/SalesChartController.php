<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class SalesChartController extends Controller
{
    public function actionPerRegion($year)
    {
        echo "<p>Ini URL: <strong>" .Yii::$app->request->absoluteUrl . "</strong></p>";

        if ($year == "all") {
            echo "Menampilkan semua chart" ;
        } else if ($year > 1980 && $year < 2050) {
            echo "Menampilkan chart tahun $year";
        } else {
            echo "chart tidak dapat ditampilkan";
        }
    }
}