<?php

namespace emirhandeniz58\odeme\models;

use Yii;

/**
 * This is the model class for table "kartlar".
 *
 * @property string $kartAdi
 *
 * @property Odeme[] $odemes
 */
class Kartlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kartlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kartAdi'], 'required'],
            [['kartAdi'], 'string', 'max' => 50],
            [['kartAdi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kartAdi' => 'Kart Adi',
        ];
    }

    /**
     * Gets query for [[Odemes]].
     *
     * @return \yii\db\ActiveQuery|OdemeQuery
     */
    public function getOdemes()
    {
        return $this->hasMany(Odeme::className(), ['cardAdi' => 'kartAdi']);
    }

    /**
     * {@inheritdoc}
     * @return KartlarQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KartlarQuery(get_called_class());
    }
}
