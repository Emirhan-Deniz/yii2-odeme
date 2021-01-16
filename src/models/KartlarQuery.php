<?php

namespace emirhandeniz58\odeme\models;

/**
 * This is the ActiveQuery class for [[Kartlar]].
 *
 * @see Kartlar
 */
class KartlarQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Kartlar[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Kartlar|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
