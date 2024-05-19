<?php

use yii\helpers\Html;

$this->title= 'Siswa';
$this->params['breadcrumbs'][]=$this->title;

?>

<div>
    <p>Ini URL: <strong><?= Yii::$app->request->absoluteUrl ?></strong></p>
    <p>Siswa dengan no ID: <strong><?$id?></strong>, memiliki detail sebagai berikut;
    <ul>
        <li>NISN : <strong><?=$model->nisn?></strong></li>
        <li>Nama Lengkap : <strong><?=$model->namaLengkap?></strong></li>
        <li>Jenis Kelamin : <strong><?=$model->jenisKelamin?></strong></li>
    </ul>
</div>