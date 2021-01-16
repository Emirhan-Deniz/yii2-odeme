<?php

namespace emirhandeniz58\odeme\models;

/**
 * This is the ActiveQuery class for [[Odeme]].
 *
 * @see Odeme
 */
class OdemeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Odeme[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Odeme|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
