<?php

namespace emirhandeniz58\odeme\models;

use Yii;

/**
 * This is the model class for table "odeme".
 *
 * @property int $id
 * @property string $isim
 * @property string $email
 * @property string $cardAdi
 * @property int $tutar
 * @property string $tarih
 *
 * @property Kartlar $cardAdi0
 */
class Odeme extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'odeme';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim', 'email', 'cardAdi', 'tutar', 'tarih'], 'required'],
            [['tutar'], 'integer'],
            [['isim', 'email', 'cardAdi', 'tarih'], 'string', 'max' => 50],
            [['cardAdi'], 'exist', 'skipOnError' => true, 'targetClass' => Kartlar::className(), 'targetAttribute' => ['cardAdi' => 'kartAdi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
            'email' => 'Email',
            'cardAdi' => 'Card Adi',
            'tutar' => 'Tutar',
            'tarih' => 'Tarih',
        ];
    }

    /**
     * Gets query for [[CardAdi0]].
     *
     * @return \yii\db\ActiveQuery|KartlarQuery
     */
    public function getCardAdi0()
    {
        return $this->hasOne(Kartlar::className(), ['kartAdi' => 'cardAdi']);
    }

    /**
     * {@inheritdoc}
     * @return OdemeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OdemeQuery(get_called_class());
    }
}
