<?php

namespace siska\models;

use Yii;

/**
 * This is the model class for table "agama".
 *
 * @property int $id
 * @property string $nama_agama
 */
class Agama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agama';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_agama'], 'required'],
            [['nama_agama'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_agama' => 'Nama Agama',
        ];
    }
}
